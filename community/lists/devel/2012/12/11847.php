<?
$subject_val = "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:25:31 2012" -->
<!-- isoreceived="20121211162531" -->
<!-- sent="Tue, 11 Dec 2012 10:25:27 -0600" -->
<!-- isosent="20121211162527" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CRIU checkpoint support in Open-MPI?" -->
<!-- id="CAANzjE=_xU-sSKAwRNe9Vb-OpCYPTwuE_H5Uv1HF5yA6=9=c6Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2CC2F9EC-1D85-4938-A16F-4F9366AB4D5E_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CRIU checkpoint support in Open-MPI?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-11 11:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11848.php">Jeff Squyres: "[OMPI devel] RFC: deprecating the MPI C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="11846.php">Jeff Squyres: "[OMPI devel] SVN tags/branch question"</a>
<li><strong>In reply to:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 I would be interested in seeing support for this in Open MPI.
<br>
<p>On Thu, Dec 6, 2012 at 8:14 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, all contributions are welcomed. It should be almost trivial to write
</span><br>
<span class="quotelev1">&gt; a new backend in Open MPI to support what the kernel developers will agree
</span><br>
<span class="quotelev1">&gt; to add as C/R capabilities. A good starting point to look at are the
</span><br>
<span class="quotelev1">&gt; existing modules in opal/mca/crs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 6, 2012, at 03:56 , Christopher Samuel &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if people have seen that the Linux kernel community is
</span><br>
<span class="quotelev2">&gt; &gt; following its own different checkpoint/restart path to those currently
</span><br>
<span class="quotelev2">&gt; &gt; supported by OMPI, namely that of the OpenVZ developers
</span><br>
<span class="quotelev2">&gt; &gt; &quot;checkpoint/restore in user space&quot; project (CRIU).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can read more about its current state here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lwn.net/Articles/525675/">https://lwn.net/Articles/525675/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The CRIU website is here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://criu.org/">http://criu.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CRIU will also be up for discussion at LCA2013 in Canberra this year
</span><br>
<span class="quotelev2">&gt; &gt; (though I won't be there):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://linux.conf.au/schedule/30116/view_talk?day=thursday">http://linux.conf.au/schedule/30116/view_talk?day=thursday</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there interest from OMPI in supporting this, given it looks like
</span><br>
<span class="quotelev2">&gt; &gt; it's quite likely to make it into the mainline kernel?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or is better to wait for it to be merged, and then take a look?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All the best,
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; - --
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt; &gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt; &gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt; &gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt; &gt; Comment: Using GnuPG with undefined - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; iEYEARECAAYFAlDACXYACgkQO2KABBYQAh8LIQCfagfyZNzK3KVKb+W0etJV4tyL
</span><br>
<span class="quotelev2">&gt; &gt; AxwAn0z6q7TVNcOTom0tmvy7brfFf4QV
</span><br>
<span class="quotelev2">&gt; &gt; =SLvF
</span><br>
<span class="quotelev2">&gt; &gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11848.php">Jeff Squyres: "[OMPI devel] RFC: deprecating the MPI C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="11846.php">Jeff Squyres: "[OMPI devel] SVN tags/branch question"</a>
<li><strong>In reply to:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
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
