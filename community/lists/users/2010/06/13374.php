<?
$subject_val = "[OMPI users] problems with turbFoam";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 09:43:14 2010" -->
<!-- isoreceived="20100622134314" -->
<!-- sent="Tue, 22 Jun 2010 15:43:07 +0200" -->
<!-- isosent="20100622134307" -->
<!-- name="asmae.elbahlouli_at_[hidden]" -->
<!-- email="asmae.elbahlouli_at_[hidden]" -->
<!-- subject="[OMPI users] problems with turbFoam" -->
<!-- id="OF05E119E4.4BD17162-ONC125774A.004B5BDA-C125774A.004B5BE0_at_mpsa.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3B3F6DFE-6B08-4A4E-B6BC-5A7D847171DF_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] problems with turbFoam<br>
<strong>From:</strong> <a href="mailto:asmae.elbahlouli_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problems%20with%20turbFoam"><em>asmae.elbahlouli_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-06-22 09:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>Previous message:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>Reply:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<FONT face="Default Sans Serif,Verdana,Arial,Helvetica,sans-serif" size=2><P style="MARGIN: 0px">hello, i'm new with openfoam and i&nbsp;have a problem with a mpirun, when a type in the terminal : <SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA"><EM>mpirun -np 30 -machinefile machinefile turbFoam -<SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA">parallel | tee 2&gt;&amp;1 log/turb.log</SPAN></EM></SPAN></P><P style="MARGIN: 0px"><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA"><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA"><FONT face="Default Sans Serif,Verdana,Arial,Helvetica,sans-serif">it runs, after a while it stops with this message : </FONT></SPAN></SPAN></P><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA"><SPAN style="FONT-SIZE: 10pt; FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA"><P class=MsoPlainText style="MARGIN: 0cm 0cm 0pt"><EM><FONT color=#000099>Create time<SPAN style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </SPAN><BR>Create mesh for time = 4000<BR>Reading field p<BR>Reading field U<BR>Reading/calculating face flux field phi<BR>[23]<BR>[23]<BR>[23] keyword PISO is undefined in dictionary "/media/OpenFoam/Travaux/psa-habitacle/foamProMesh-pisoFoam/turbtest/turbFoam/processor23/system/fvSolution"<BR>[23]<BR>[23] file: /media/OpenFoam/Travaux/psa-habitacle/foamProMesh-pisoFoam/turbtest/turbFoam/processor23/system/fvSolution from line 3 to line 31.<BR>[23]<BR>[23]<SPAN style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp; </SPAN>From function dictionary::subDict(const word&amp; keyword) const<BR>[23]<SPAN style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp; </SPAN>in file db/dictionary/dictionary.C at line 271.<BR>[23]<BR>FOAM parallel run exiting<BR>[23]<BR>--------------------------------------------------------------------------<BR>MPI_ABORT was invoked on rank 23 in communicator MPI_COMM_WORLD with errorcode 1.<BR>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.<BR>You may or may not see output from other processes, depending on exactly when Open MPI kills them.</FONT></EM></P><P class=MsoPlainText style="MARGIN: 0cm 0cm 0pt"><EM><FONT color=#000099>--------------------------------------------------------------------------<BR>mpirun has exited due to process rank 23 with PID 30795 on node 10.0.0.7 exiting without calling "finalize". This may have caused other processes in the application to be terminated by signals sent by mpirun (as reported here).</FONT></EM></P><P class=MsoPlainText style="MARGIN: 0cm 0cm 0pt"><BR><FONT face="Default Sans Serif,Verdana,Arial,Helvetica,sans-serif">but when i replace&nbsp; turbFoam in the mpirun&nbsp;with simpleFoam it runs correctly.&nbsp; Someone knows what is the problem?</FONT></P><P class=MsoPlainText style="MARGIN: 0cm 0cm 0pt"><FONT face="Default Sans Serif,Verdana,Arial,Helvetica,sans-serif">thanks</FONT></P></SPAN></SPAN></FONT><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>Previous message:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13373.php">Jeff Squyres: "Re: [OMPI users] Problems with memchecker in version 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<li><strong>Reply:</strong> <a href="13375.php">Jeff Squyres: "Re: [OMPI users] problems with turbFoam"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
