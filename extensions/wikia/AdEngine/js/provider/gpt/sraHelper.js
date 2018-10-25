/*global define*/
/*jshint maxlen:125, camelcase:false, maxdepth:7*/
define('ext.wikia.adEngine.provider.gpt.sraHelper', [
	'wikia.log'
], function (log) {
	'use strict';

	var logGroup = 'ext.wikia.adEngine.provider.gpt.sraHelper',
		flushed = false,
		sraSlots = [
			'INVISIBLE_SKIN',
			'TOP_LEADERBOARD'
		],
		optionalSlots = [
			'INVISIBLE_SKIN'
		];

	function isOptional(slotName) {
		return optionalSlots.indexOf(slotName) !== -1;
	}

	function shouldFlush(slotName) {
		if (sraSlots.indexOf(slotName) === -1) {
			log(['shouldFlush', 'Non-SRA slot', slotName], 'debug', logGroup);
			flushed = true;
		}

		log(['shouldFlush', slotName, flushed], 'debug', logGroup);
		return flushed;
	}

	return {
		isOptional: isOptional,
		shouldFlush: shouldFlush
	};
});
