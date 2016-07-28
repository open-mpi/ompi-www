<?
$subject_val = "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 13:20:56 2007" -->
<!-- isoreceived="20071128182056" -->
<!-- sent="Wed, 28 Nov 2007 13:20:50 -0500" -->
<!-- isosent="20071128182050" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)" -->
<!-- id="DB07E060-FED2-46A5-A196-9B59F8894798_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="263540390711280624q6f75ca98p271da17454e73967_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 13:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Previous message:</strong> <a href="4544.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4536.php">geetha r: "[OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Reply:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Reply:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your F77 compiler do not support array of LOGICAL variables (which  
<br>
seems to be the case if you look in the config.log file), then you're  
<br>
left with only one option. Remove the F77 support from the  
<br>
compilation. This means adding the --disable-mpi-f77 option to the ./ 
<br>
configure.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 28, 2007, at 9:24 AM, geetha r wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;        Subject: &quot;Need exact command line for ./configure  
</span><br>
<span class="quotelev1">&gt; {optionslist} &quot;  to build OPENMPI-1.2.4 on windows.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while configuration script checking the FORTRAN77 compiler , iam  
</span><br>
<span class="quotelev1">&gt; getting following error,so openmpi- build is unsuccessful on  
</span><br>
<span class="quotelev1">&gt; windows(with configure script)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  checking for correct handling of FORTRAN logical arrays... no
</span><br>
<span class="quotelev1">&gt; configure: error: Error determining if arrays of logical values work  
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i want to build, openmpi-1.2.4 (which is downloaded from MINGW), on  
</span><br>
<span class="quotelev1">&gt; windows -2000 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can somebody give proper build command i can use to &quot;build opennmpi  
</span><br>
<span class="quotelev1">&gt; on windows-2000&quot; machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure  .......(options list)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can some body pls tell &quot;exact options to pass&quot; in the option list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iam using cygwin to build openmpi on windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS:
</span><br>
<span class="quotelev1">&gt; I am attaching the output files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.log -&gt; actual log file.
</span><br>
<span class="quotelev1">&gt; config.out -&gt; output of the ./configure  file
</span><br>
<span class="quotelev1">&gt; make.out -&gt; fail because, configure build unsuccess on windows.
</span><br>
<span class="quotelev1">&gt; make.install-&gt; fail because, configure build unsuccess on windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I am using all g77,g++,gcc from MINGW package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have downloaded and added g95 also, but which does not solve my  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Geetha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious  
</span><br>
<span class="quotelev1">&gt; type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are  
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause  
</span><br>
<span class="quotelev1">&gt; irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any  
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE  
</span><br>
<span class="quotelev1">&gt; OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail  
</span><br>
<span class="quotelev1">&gt; scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; make 
</span><br>
<span class="quotelev1">&gt; .install 
</span><br>
<span class="quotelev1">&gt; .zip 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; make 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev1">&gt; .zip 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .out.zip&gt;&lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4545/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Previous message:</strong> <a href="4544.php">Ogden, Jeffry Brandon: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4536.php">geetha r: "[OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Reply:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<li><strong>Reply:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
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
