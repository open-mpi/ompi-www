<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 26 00:49:42 2005" -->
<!-- isoreceived="20050326054942" -->
<!-- sent="Fri, 25 Mar 2005 21:49:20 -0800 (PST)" -->
<!-- isosent="20050326054920" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] ABI or API?" -->
<!-- id="20050326054920.29108.qmail_at_web31513.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2005-03-26 00:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Adam Young: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>With this debate over a common interface, I've noticed
<br>
that some have been talking about a common API (ie:
<br>
code-level compatibility) and others an ABI (ie:
<br>
binary-level compatibility). There's a big difference,
<br>
so I think it might be helpful if it was cleared up as
<br>
to what it was that was wanted. :)
<br>
<p>Assuming an ABI, I suggest calling it IPM (for
<br>
Implementation-Proof MPI - yes, another recursive
<br>
acronym! :)
<br>
<p>An ABI could be written as:
<br>
<p>1) A wrapper that the program linked to, where the
<br>
wrapper could connect to any one of a number of MPI
<br>
libraries
<br>
<p>2) A wrapper around the MPI library which provided a
<br>
standard interface programs could be compiled against
<br>
<p>3) An environment that dlopen()ed both the program AND
<br>
an MPI library
<br>
<p>Any of these would allow you to have a high degree of
<br>
independence of language-specific quirks, (1) in
<br>
particular as you could both generic and
<br>
language-specific transliteration code. You'd simply
<br>
link to what was most appropriate.
<br>
<p>(1) would also have the benefit that you could
<br>
effectively exploit compiler-specific features (eg:
<br>
OpenMP) or language-specific parallelisms (eg: Occam)
<br>
because the wrapper would (in part or in whole) be
<br>
inside the application and therefore would have access
<br>
to all of these bug^H^H^Hfeatures.
<br>
<p>(2) has the benefit that the library presents a common
<br>
interface, no matter what. Any variation can be
<br>
handled inside the wrapper. That means you could use
<br>
anything that provides essentially the same
<br>
capabilities, not just MPI. It might also make it
<br>
easier to handle mixed MPI-1 and MPI-2 environments,
<br>
as the differences at the application layer would be
<br>
transparent.
<br>
<p>(3) has the advantage that you could hot-swap MPI
<br>
implementations, while an application is running. This
<br>
might be interesting in network research and possibly
<br>
useful for really exotic environments, I can't see it
<br>
would have much to offer otherwise.
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Do you Yahoo!? 
<br>
Yahoo! Small Business - Try our new resources site!
<br>
<a href="http://smallbusiness.yahoo.com/resources/">http://smallbusiness.yahoo.com/resources/</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Adam Young: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
