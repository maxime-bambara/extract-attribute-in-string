<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test PHP</title>

 
</head>
<body>
	
	<!-- L'objectif est  extraire touts les attributs src des images et les attributs alt associés dans le code html fourni.<br />
	Le résultat doit être un tableau avec<br />
	l'image affichée, l'adresse de l'image, l'attribut ALT<br />
	Vous pouvez vous servir de classes php existantes sur le web pour l'analyse de code html, de php natif ou de regex par exemple <br />
	Temps estimé : 30mn -->
	
	<?php
		$html = ('<table data-module="why-this-template" data-rank-order="4" style="width:100%;max-width:100%;" data-module-identifier="VacuosGyOL9q" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody><tr>
        <td data-bgcolor="Body" data-primary-order="1" data-primary-type="bgcolor" style="background-color: rgb(244, 244, 244);" valign="middle" bgcolor="#F4F4F4" align="center">

            
            <table class="row" style="width:640px;max-width:640px;" width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody><tr>
                    <td data-bgcolor="Bgcolor" data-primary-order="2" data-primary-type="bgcolor" style="background-color: rgb(218, 236, 248); height: 450px;" class="ui-resizable" align="center">

                        
                        <table class="row" style="width:580px;max-width:580px;" width="580" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody><tr>
                                <td class="container-padding" align="center">

                                    
                                    <table style="width:100%; max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                         <tbody>

										<tr>
										<td>
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td style="font-size:0;" align="center">
														<!--[if mso]>
														<table  aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;">
															<tr>
																<td align="center" valign="top" width="580">
																	<![endif]-->
															
															<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:580px; width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																<tbody><tr>
																	<td style="padding:15px 10px;" align="center">
																		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																			<tbody><tr>
																				<td style="color:#666666;" width="60" valign="top" align="left">
																					 <img src="http://www.stampready.net/dashboard/editor-3-5/uploads/image_uploads/edited/2021/04/30/FyHnrxVOhvo6mfsTj4g5YkXb810MEAJPBU9iGewC7I.png" alt="screen" style="margin: 0px; border: 0px none; padding: 0px; max-width: 100%; display: block; background-color: rgb(218, 236, 248); border-radius: 0px; max-height: 100%;" data-bgcolor="Bullet Points" width="60" height="60">
																				</td>
																				<td width="20">
																					&nbsp;
																				</td>
																				<td align="left">
																					<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tbody><tr>
																							
																							<td style="color: rgb(29, 45, 103); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-weight: 600; font-size: 16px; line-height: 20px; letter-spacing: 0px;" data-color="Titles" data-size="Titles" data-min="12" data-max="20" align="left"><div style="color: #10a0d1;">19h00</div><div>La chirurgie du creux axillaire en
situation de chirurgie première</div></td>
																						</tr>
																						<tr>
																							<td style="mso-line-height-rule:exactly; line-height:5px; font-size:0;" height="5">
																								&nbsp;
																							</td>
																						</tr>
																						<tr>
																							
																							<td style="color: rgb(51, 51, 51); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px; font-weight: 400;" data-color="Paragraphs" data-size="Paragraphs" data-min="12" data-max="16" align="left">Pr Emmanuel Barranger</td>
																						</tr>
																					</tbody></table>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														<!--[if mso]>
																</td>
															</tr>
														</table>
														<![endif]-->
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
									
									<tr>
										<td>
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td style="font-size:0;" align="center">
														<!--[if mso]>
															<table  aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;">
																<tr>
																	<td align="center" valign="top" width="580">
																		<![endif]-->
															
															<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:580px; width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																<tbody><tr>
																	<td style="padding:15px 10px;" align="center">
																		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																			<tbody><tr>
																				<td style="color:#666666;" width="60" valign="top" align="left">
																					<img src="http://www.stampready.net/dashboard/editor-3-5/uploads/image_uploads/edited/2021/04/30/3pNZdDGneQrPSovkHyRgizVt6OJCcsUfq5LjAK2EFw.png" alt="attribut alt" style="margin: 0px; border: 0px none; padding: 0px; max-width: 100%; display: block; background-color: rgb(218, 236, 248); border-radius: 0px; max-height: 100%;" data-bgcolor="Bullet Points" width="60" height="60">
																				</td>
																				<td width="20">
																					&nbsp;
																				</td>
																				<td align="left">
																					<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tbody><tr>
																							
																							<td style="color: rgb(29, 45, 103); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-weight: 600; font-size: 16px; line-height: 20px; letter-spacing: 0px;" data-color="Titles" data-size="Titles" data-min="12" data-max="20" align="left"><div style="color: #10a0d1;">19h15</div><div>La chirurgie du creux axillaire
après chimiothérapie néoadjuvante</div></td>
																						</tr>
																						<tr>
																							<td style="mso-line-height-rule:exactly; line-height:5px; font-size:0;" height="5">
																								&nbsp;
																							</td>
																						</tr>
																						<tr>
																							
																							<td style="color: rgb(51, 51, 51); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px; font-weight: 400;" data-color="Paragraphs" data-size="Paragraphs" data-min="12" data-max="16" align="left">Pr Jean-Marc Classe</td>
																						</tr>
																					</tbody></table>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														<!--[if mso]>
																	</td>
																</tr>
															</table>
															<![endif]-->
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
									
									<tr>
										<td>
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td style="font-size:0;" align="center">
														<!--[if mso]>
															<table  aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;">
																<tr>
																	<td align="center" valign="top" width="580">
																		<![endif]-->
															
															<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:580px; width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																<tbody><tr>
																	<td style="padding:15px 10px;" align="center">
																		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																			<tbody><tr>
																				<td style="color:#666666;" width="60" valign="top" align="left">
																					 <img src="http://www.stampready.net/dashboard/editor-3-5/uploads/image_uploads/edited/2021/04/30/qiL1vsSNGnpfQRw0mkAjUyZc2JEatYPFKlgbTXVh7o.png" alt="rztz rtz t" style="margin: 0px; border: 0px none; padding: 0px; max-width: 100%; display: block; background-color: rgb(218, 236, 248); border-radius: 0px; max-height: 100%;" data-bgcolor="Bullet Points" width="60" height="60">
																				</td>
																				<td width="20">
																					&nbsp;
																				</td>
																				<td align="left">
																					<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tbody><tr>
																							
																							<td style="color: rgb(29, 45, 103); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-weight: 600; font-size: 16px; line-height: 20px; letter-spacing: 0px;" data-color="Titles" data-size="Titles" data-min="12" data-max="20" align="left"><div style="color: #10a0d1;">19h30</div><div>La radiothérapie ganglionnaire</div></td>
																						</tr>
																						<tr>
																							<td style="mso-line-height-rule:exactly; line-height:5px; font-size:0;" height="5">
																								&nbsp;
																							</td>
																						</tr>
																						<tr>
																							
																							<td style="color: rgb(51, 51, 51); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px; font-weight: 400;" data-color="Paragraphs" data-size="Paragraphs" data-min="12" data-max="16" align="left">Pr Christophe Hennequin</td>
																						</tr>
																					</tbody></table>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														<!--[if mso]>
																</td>
															</tr>
														</table>
														<![endif]-->
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
									<tr>
										<td style="mso-line-height-rule: exactly; line-height:5px; font-size:0;" height="5">
											&nbsp;
										</td>
									</tr>
										   <tr>
										<td>
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td style="font-size:0;" align="center">
														<!--[if mso]>
															<table  aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;">
																<tr>
																	<td align="center" valign="top" width="580">
																		<![endif]-->
															
															<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:580px; width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																<tbody><tr>
																	<td style="padding:15px 10px;" align="center">
																		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																			<tbody><tr>
																				<td style="color:#666666;" width="60" valign="top" align="left">
																					 <img src="http://www.stampready.net/dashboard/editor-3-5/uploads/image_uploads/edited/2021/04/30/1rD0VI47KpuHSZnvgTOJahl53sFcdMQYGPiwWELtzR.png" alt="imageee" style="margin: 0px; border: 0px none; padding: 0px; max-width: 100%; display: block; background-color: rgb(218, 236, 248); border-radius: 0px; max-height: 100%;" data-bgcolor="Bullet Points" width="60" height="60">
																				</td>
																				<td width="20">
																					&nbsp;
																				</td>
																				<td align="left">
																					<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tbody><tr>
																							
																							<td style="color: rgb(29, 45, 103); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-weight: 600; font-size: 16px; line-height: 20px; letter-spacing: 0px;" data-color="Titles" data-size="Titles" data-min="12" data-max="20" align="left"><div style="color: #10a0d1;">19h45</div><div>Immunothérapie et thérapies
ciblées</div></td>
																						</tr>
																						<tr>
																							<td style="mso-line-height-rule:exactly; line-height:5px; font-size:0;" height="5">
																								&nbsp;
																							</td>
																						</tr>
																						<tr>
																							
																							<td style="color: rgb(51, 51, 51); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px; font-weight: 400;" data-color="Paragraphs" data-size="Paragraphs" data-min="12" data-max="16" align="left">Dr Eric-Charles Antoine</td>
																						</tr>
																					</tbody></table>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														<!--[if mso]>
																</td>
															</tr>
														</table>
														<![endif]-->
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
										   
										   <tr>
										<td style="mso-line-height-rule: exactly; line-height:5px; font-size:0;" height="5">
											&nbsp;
										</td>
									</tr>
										   <tr>
										<td>
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td style="font-size:0;" align="center">
														<!--[if mso]>
															<table  aria-hidden="true" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;">
																<tr>
																	<td align="center" valign="top" width="580">
																		<![endif]-->
															
															<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; max-width:580px; width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																<tbody><tr>
																	<td style="padding:15px 10px;" align="center">
																		<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																			<tbody><tr>
																				<td style="color:#666666;" width="60" valign="top" align="left">
																					 <img src="http://www.stampready.net/dashboard/editor-3-5/uploads/image_uploads/edited/2021/04/30/JmfntXSx9a5ZFiNl46UIKrYdTwuH1GLoq3DkzRVWA7.png" alt="toto1" style="margin: 0px; border: 0px none; padding: 0px; max-width: 100%; display: block; background-color: rgb(218, 236, 248); border-radius: 0px; max-height: 100%;" data-bgcolor="Bullet Points" width="60" height="60">
																				</td>
																				<td width="20">
																					&nbsp;
																				</td>
																				<td align="left">
																					<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tbody><tr>
																							
																							<td style="color: rgb(29, 45, 103); font-family: \'montserrat\', Arial, Helvetica, sans-serif; font-weight: 600; font-size: 16px; line-height: 20px; letter-spacing: 0px;" data-color="Titles" data-size="Titles" data-min="12" data-max="20" align="left"><div style="color: #10a0d1;">20h00</div><div>Table ronde</div></td>
																						</tr>
																						<tr>
																							<td style="mso-line-height-rule:exactly; line-height:5px; font-size:0;" height="5">
																								&nbsp;
																							</td>
																						</tr>
																					</tbody></table>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														<!--[if mso]>
																</td>
															</tr>
														</table>
														<![endif]-->
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>

                                    </tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                        
                    </td>
                </tr>
            </tbody></table>
            
        </td>
    </tr>
</tbody></table>');


//analysez le code HTML pour en extraire les données ici

// Monn tableau
$result = [];

// Mes attributs à récupérer
$src = 'src="';
$alt = 'alt="';
$img = '<img';


// Nombre d'image dans la chaine html
$imageCount = substr_count($html,$src);

// Function qui récupère nos attribut src, alt ou autre
function getAttribut($string, $attribut){
	$result = substr($string, strpos($string,$attribut) + (strlen($attribut)));
	return substr($result, 0 ,strpos($result,'"'));
}

// Function qui récupère notre image
function getImage($string, $img){
	$result = substr($string, strpos($string,$img));
	return substr($result, 0 ,strpos($result,'>'));
}

// Boucle pour effectuer notre recherche sur toute les image et les insérer dans notre tableau 
for($i = 1; $i <= $imageCount; $i++){
	array_push($result, array(getAttribut($html, $alt), getAttribut($html, $src),getImage($html,$img),));
	$html = substr($html, strpos($html,$alt) + 1);
}

var_dump($result);
	?>

</body>
</html>