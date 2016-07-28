<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 11:55:51 2006" -->
<!-- isoreceived="20060524155551" -->
<!-- sent="Wed, 24 May 2006 11:55:43 -0400" -->
<!-- isosent="20060524155543" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3E73_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Fortran support not installing" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 11:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1268.php">&#209;&#238;&#191;&#198;: "[OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI does require the F77 bindings for F90 support.  Hence, if you
<br>
want to use g95, you also need to have the F77 bindings configured and
<br>
built.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt;From the output you sent, you ran &quot;./configure FC=g95&quot;.  Configure did
</span><br>
not find a valid F77 compiler, and therefore skipped both the F77 and
<br>
F90 bindings.
<br>
&nbsp;
<br>
Can you try:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure FC=g95 F77=g95
<br>
and/or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure FC=gfortran F77=gfortran
<br>
&nbsp;
<br>
You said you tried the formed but it died in configure -- can you send
<br>
the configure output and config.log from that run?
<br>
&nbsp;
<br>
Thanks.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Terry Reeves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, May 24, 2006 11:25 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] Fortran support not installing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello, everyone.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have g95 fortran installed. I'm told it works. I'm doing this
<br>
for some grad students, I am not myself a programmer or a unix expert
<br>
but I know a bit more than the basics.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a Mac OS X dual G5 processor xserve running OS X Server
<br>
10.4.6. I have xcode 2.2 installed which gives me gcc 3.3 and 4.01
<br>
installed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I do this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure FC=g95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mpif90 yields this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
------------------------------------------------------------------------
<br>
<pre>
--
	Unfortunately, this installation of Open MPI was not compiled
with
	Fortran 90 support.  As such, the mpif90 compiler is
non-functional.
	
------------------------------------------------------------------------
--
	btw if I try this 
	./configure F77=g95 FC=g95 it bombs in the configure stage but
as far as I know f77 support is not needed but perhaps its useful info.
	
	
	I have included config.log, config.out, make-install.out,
make.out, and ompi_config.h per instructions on the web site.
	
	
	I have also tried this with gfortran with the same results.
	
	
	Any help you can give would be appreciated
	
	
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1268.php">&#209;&#238;&#191;&#198;: "[OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1270.php">Michael Kluskens: "Re: [OMPI users] Fortran support not installing"</a>
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
