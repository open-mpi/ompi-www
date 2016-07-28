<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 13:22:51 2014" -->
<!-- isoreceived="20140724172251" -->
<!-- sent="Thu, 24 Jul 2014 19:22:48 +0200" -->
<!-- isosent="20140724172248" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="53D140E8.2000003_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53D13BCD.7080905_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 13:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15254.php">Marco Atzeri: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15255.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for the record: The --disable-dependency-tracking triggers the 
<br>
problem. Which rpmbuild probably passes to the configure call.
<br>
<p>Bert
<br>
<p>On 07/24/2014 07:01 PM, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; On 07/24/2014 03:59 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Another data point:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just bootstrapped with Automake 1.14.1, and got the same result
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., ls -l before configure, the &quot;hooks&quot; directory is NOT there, run
</span><br>
<span class="quotelev2">&gt;&gt; configure, ls -l and the &quot;hooks&quot; directory IS there).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing something changed elsewhere in the toolchain on
</span><br>
<span class="quotelev2">&gt;&gt; RHEL7/SLES12(beta) that is causing this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert: how is the &quot;hooks&quot; directory normally created?  Do you have some
</span><br>
<span class="quotelev2">&gt;&gt; specific .m4 that creates it?  Or is it a side-effect of something in
</span><br>
<span class="quotelev2">&gt;&gt; configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is a side affect of the depfiles command called by configure. By
</span><br>
<span class="quotelev1">&gt; coincident, this command is also the reason why we needed to made this
</span><br>
<span class="quotelev1">&gt; change in the first place to support the subdir-objects option of
</span><br>
<span class="quotelev1">&gt; automake. The depfiles command creates the .deps directory using the
</span><br>
<span class="quotelev1">&gt; dirname of the source file if the subdir-objecs option is active. But if
</span><br>
<span class="quotelev1">&gt; the source file contains make file variable references it can't resolve
</span><br>
<span class="quotelev1">&gt; these (remember that it is called by configure) and creates directories
</span><br>
<span class="quotelev1">&gt; like '$(VTUNIFY_ROOT)/hooks/.deps', literally. Now we rely that this
</span><br>
<span class="quotelev1">&gt; depfiles command creates for us the hooks directory. I must admit that
</span><br>
<span class="quotelev1">&gt; this is not bullet proof, and it may actually be removed in the future
</span><br>
<span class="quotelev1">&gt; completely by automake/autoconf [1]. So it is best to handle the
</span><br>
<span class="quotelev1">&gt; creation of this directory inside the VT Makefile altogether. The fix is
</span><br>
<span class="quotelev1">&gt; simple though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now there is still a problem: Matthias Jurenz is on vacation until
</span><br>
<span class="quotelev1">&gt; August 5th. and I'm completely unfamiliar with the procedure how the VT
</span><br>
<span class="quotelev1">&gt; code is updated in the ompi trunk. For what I see it should go like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Commit into vendor/vampirtrace/current
</span><br>
<span class="quotelev1">&gt; 2. Merge into trunk/ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt; 3. Create a CMR for 1.8 with reviewer who? (Andreas is on vacation too ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
</span><br>
<span class="quotelev1">&gt;      Read the reply from Stefann:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - from Automake 2.0 onward, only enable the automatic dependency
</span><br>
<span class="quotelev1">&gt;      tracking if GNU make is used; we can thus assume the presence
</span><br>
<span class="quotelev1">&gt;      of the &quot;-include&quot; directive (which ignore non-existing files,
</span><br>
<span class="quotelev1">&gt;      rather than punting), and its use will allow us to get rid of
</span><br>
<span class="quotelev1">&gt;      the configure time machinery for the initial creation of .deps
</span><br>
<span class="quotelev1">&gt;      directories (this has already been done in Automake-NG, and has
</span><br>
<span class="quotelev1">&gt;      worked beautifully so far).
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15252.php">http://www.open-mpi.org/community/lists/devel/2014/07/15252.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15253/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15254.php">Marco Atzeri: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15252.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15255.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
