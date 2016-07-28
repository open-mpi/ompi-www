<?
$subject_val = "[OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:01:35 2015" -->
<!-- isoreceived="20150722000135" -->
<!-- sent="Tue, 21 Jul 2015 17:01:30 -0700" -->
<!-- isosent="20150722000130" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32" -->
<!-- id="CAAvDA14a6vnPwpQ6JLwZ8amNHeVhE6YqvRfqUxiBpMGr970aOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 20:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>Previous message:</strong> <a href="17671.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>Reply:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I know you recently fixed a C99-related issue I saw in 1.10.0rc1 (removing
<br>
designators in an initializer).
<br>
<p>So, I was surprised to see the following with pgi-9.0-4 and -m32:
<br>
<p>============================================================================
<br>
== Compiler and preprocessor tests
<br>
============================================================================
<br>
<p>*** C compiler and preprocessor
<br>
checking for gcc... (cached) pgcc
<br>
checking whether we are using the GNU C compiler... (cached) no
<br>
checking whether pgcc accepts -g... (cached) yes
<br>
checking for pgcc option to accept ISO C89... (cached) none needed
<br>
checking whether pgcc and cc understand -c and -o together... yes
<br>
checking for pgcc option to accept ISO C99... unsupported
<br>
configure: WARNING: Open MPI requires a C99 compiler
<br>
configure: error: Aborting.
<br>
<p>The odd  thing is this is happening with &quot;-m32&quot;, but not without it.
<br>
Examining config.log shows problems with &quot;ull&quot; suffixes on constants.
<br>
So, this does appear to be a *valid* choice to reject this compiler.
<br>
<p>HOWEVER, I just wanted to ask if 1.10.0 is really intended to be enforcing
<br>
C99 or not?
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>Previous message:</strong> <a href="17671.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>Reply:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
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
