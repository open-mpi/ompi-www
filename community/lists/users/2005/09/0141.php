<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 13 17:01:33 2005" -->
<!-- isoreceived="20050913220133" -->
<!-- sent="Tue, 13 Sep 2005 15:01:21 -0700 (PDT)" -->
<!-- isosent="20050913220121" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] MIPS64 Trek, The Search for MIPS" -->
<!-- id="20050913220121.43126.qmail_at_web31507.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-13 17:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I've established that the macros used do exist in
<br>
the Linux MIPS64 header files. They are located in
<br>
&lt;asm/asm.h&gt; So, it seems safe to guess that something
<br>
is getting confused.
<br>
<p>I'm trying an experiment, by copying the MIPS
<br>
configuration section and having it look for mips64*
<br>
or mipsisa64*. It then sets the assembler symbol to
<br>
MIPS64.
<br>
<p>I copied all the MIPS files I've found so far into
<br>
MIPS64 files. I do not believe the assembly differs
<br>
between Irix and Linux, my interest lies more in why
<br>
Linux is not picking up the macros and it seems a
<br>
reasonable first step to change some key symbols and
<br>
see what breaks.
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Yahoo! Mail - PC Magazine Editors' Choice 2005 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- nextthread="start" -->
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
