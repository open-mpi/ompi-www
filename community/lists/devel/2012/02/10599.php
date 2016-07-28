<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 17:07:48 2012" -->
<!-- isoreceived="20120224220748" -->
<!-- sent="Sat, 25 Feb 2012 09:07:40 +1100" -->
<!-- isosent="20120224220740" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="4F480A2C.8040709_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="17019_1330081095_4F476D47_17019_16711_1_443C2C91-FF18-4BD8-B13A-4EB17CE5FDB1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 supported systems<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 17:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10600.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10598.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Maybe in reply to:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dont see any problem with indicating that Open MPI hasn't (knowingly)
<br>
broken compatibility with Open PBS (which we all agree is not changing).
<br>
Some of us run our own version of PBS derived from Open PBS.  If the
<br>
Torque and PBSPro tm interfaces were ever changed and Open MPI was
<br>
changed to only work with those interfaces, it would be good to know.
<br>
<p>Cheers,
<br>
David
<br>
<p>On 02/24/2012 09:57 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Fair point, though -- Open PBS has bit-rotted a lot since then.  It *should* work with Open MPI, but I don't think anyone has actually tested with it in years.  I'll remove it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2012, at 10:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenPBS, PBS Pro, and Torque are all identical from our perspective - the launcher code is the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2012, at 8:41 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 23/02/12 09:44, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - PBS Pro, Open PBS, Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone actually use OpenPBS any more these days? It was abandoned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; almost 11 years ago now from what I see (2.3.16 was June 2001).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.pbsworks.com/ResLibSearchResult.aspx?keywords=openpbs">http://www.pbsworks.com/ResLibSearchResult.aspx?keywords=openpbs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone test against it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iEYEARECAAYFAk9HBtAACgkQO2KABBYQAh9bvwCdHVF6sMoHbxceJObUbo46Jg3f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6KQAn3vKr++Mo1W0DbtIYl9s0GQ9SRb/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =s73m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------------------
    Dr David Singleton               ANU Supercomputer Facility
    HPC Systems Manager              and NCI National Facility
    David.Singleton_at_[hidden]       Leonard Huxley Bldg (No. 56)
    Phone: +61 2 6125 4389           Australian National University
    Fax:   +61 2 6125 8199           Canberra, ACT, 0200, Australia
--------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10600.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Previous message:</strong> <a href="10598.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Maybe in reply to:</strong> <a href="10567.php">Jeffrey Squyres: "[OMPI devel] 1.5 supported systems"</a>
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
