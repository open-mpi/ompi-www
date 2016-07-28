<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 18 11:03:53 2007" -->
<!-- isoreceived="20070818150353" -->
<!-- sent="Sat, 18 Aug 2007 17:03:34 +0200" -->
<!-- isosent="20070818150334" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="[OMPI devel] Question on NX bit patch in Debian" -->
<!-- id="1187449414.25000.10.camel_at_woodstock.pinguinkiste.local" -->
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
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-18 11:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Previous message:</strong> <a href="2192.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Reply:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>in the Debian package of OpenMPI there has been a patch [1] for some
<br>
time which I think is obsolete. I did some reading on that topic but I'm
<br>
not very familiar with assembler, so I'm asking you here.
<br>
<p>As far as I can see, removing the patch doesn't change the binaries
<br>
much. Neither scanelf nor readelf show something I'd consider as
<br>
suspicious. I think that the .note.GNU-stack instruction is added to the
<br>
assembler files by generate-asm.pl, so everything's set properly.
<br>
<p>But as I said, I'm not very familiar with the matter and it would be
<br>
great to get a statement on that issue from you. (We could drop a rather
<br>
large patch along with this one, if it's obsolete.) Thanks in advance!
<br>
<p>Best regards
<br>
Manuel
<br>
<p>Footnote:
<br>
&nbsp;1. <a href="http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/debian/patches/10opal_noexecstack.dpatch?op=file&amp;rev=0&amp;sc=0">http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/debian/patches/10opal_noexecstack.dpatch?op=file&amp;rev=0&amp;sc=0</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Previous message:</strong> <a href="2192.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Reply:</strong> <a href="2194.php">Brian Barrett: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
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
