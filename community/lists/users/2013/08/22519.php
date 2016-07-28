<?
$subject_val = "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 12:09:34 2013" -->
<!-- isoreceived="20130820160934" -->
<!-- sent="Tue, 20 Aug 2013 12:09:31 -0400" -->
<!-- isosent="20130820160931" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8" -->
<!-- id="1377014971.28353.12055717.33A8BB57_at_webmail.messagingengine.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 12:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Reply:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm encountering this error during &quot;make all&quot;:
<br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;___atomic_fetch_add_4&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::locale::locale&lt;SpaceSeparator&gt;(std::locale const&amp;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SpaceSeparator*) in otfprofile-create_latex.o
<br>
<p>See attached for the complete output.
<br>
<p>Thanks,
<br>
<pre>
-- 
  Hugo Gagnon

</pre>
<p>
<p><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22519/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Reply:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
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
