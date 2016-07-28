<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 16:01:26 2007" -->
<!-- isoreceived="20071008200126" -->
<!-- sent="Mon, 8 Oct 2007 22:00:50 +0200" -->
<!-- isosent="20071008200050" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI" -->
<!-- id="200710082200.53894.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="778AA617-4609-4FE6-8EC0-C2B77B63939E_at_cisco.com" -->
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
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 16:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Sajjad Tabib: "[OMPI devel] Module Design Concept"</a>
<li><strong>Previous message:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Jeff Squyres: "[OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, hi everybody,
<br>
<p>quite a few things to comment on. hope i catch them all:
<br>
<p>- yes, we might move vanmpirtrace to ./ompi/contrib/vampirtrace/, why not. but 
<br>
since we agreed on the current location ./tracing/vampirtrace/ we should not 
<br>
rush it just because another software is coming to openmpi, should we?
<br>
<p><p>- the &quot;call home&quot; feature. I understand you concerns perfectly well. we'll 
<br>
remove this, If anyone is asking us to. but please let me explain first:
<br>
<p>1) it's not in vampirtrace itself but in the parts we added to ompi on behalf 
<br>
of vampirtrace
<br>
2) it is never active by default, instead you need a 
<br>
special '--update-vampirtrace' switch on your configure command. otherwise 
<br>
nothing is calling nowhere. is this equivalent to &quot;totally deactivated&quot; or 
<br>
still not good enough?
<br>
3) it was our idea to make it easier to replace the included vampirtrace 
<br>
version if it was necessary. manually download and untar is not that much 
<br>
harder, though.
<br>
4) we check if 'wget' is present and try _not_ to make ./configure fail
<br>
<p>once again, if anybody want's this removed, please say so.
<br>
<p><p>- about the two vampirtrace-specific spots in the .m4 files: they correspont 
<br>
to two tasks: firstly, decide if you want vampirtrace at all or (if you might 
<br>
want to update) and secondly, passing configure options to vampirtrace.
<br>
we need to do the first before the second, of course. maybe we can move 
<br>
everything to &quot;our&quot; .m4 file, let me check ...
<br>
<p>- btw: so far the vampirtrace distribution tarball is brought to openmpi 
<br>
under ./tracing/vampirtrace with no modifications
<br>
<p><p>- the mpicc-vt (and friends) compiler wrappers: this is not part of 
<br>
vampirtrace but a new thing that only makes sense together with openmpi. 
<br>
therefore, they stay next to 'mpicc' and all others. in fact we're following 
<br>
a earlier suggestion from you, Jeff: 'mpicc-vt' is just like 'mpicc' but 
<br>
calls the 'vtcc' compier wrapper instead of 'cc'. 
<br>
<p>this makes everything much simpler, because we can handle all special cases in 
<br>
vtcc. the wrapper config for 'mpicc-vt' is almost a mere copy of mpicc's one. 
<br>
therefore, I'd like to keep them where they are right now. is this o.k. with 
<br>
everyone?
<br>
<p><p>So, I agree to some of your proposed changes. what about the rest? I'll be 
<br>
back in the office next week. Please, get back to Matthias and Matthias in 
<br>
the meantime. 
<br>
<p>knue
<br>
<p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
ZIH, TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2406/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2407.php">Sajjad Tabib: "[OMPI devel] Module Design Concept"</a>
<li><strong>Previous message:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2396.php">Jeff Squyres: "[OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
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
