<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 07:29:09 2015" -->
<!-- isoreceived="20150903112909" -->
<!-- sent="Thu, 3 Sep 2015 20:29:08 +0900" -->
<!-- isosent="20150903112908" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="CAAkFZ5t7hYkxOQ+pkzEUmJfQkSMhmGTosFpFL8XQPCZ3HA88Mg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkX=+DAFmiW8qKTyZc9gw_NH1WwayYZUChxPNqowiMiOhg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 07:29:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17930.php">Mark Santcroos: "[OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Previous message:</strong> <a href="17928.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17928.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>if a solution with two packages is acceptable,
<br>
then an other and simpler option is to configure
<br>
openmpi for PSM with --without-psm2,
<br>
and openmpi for PSM2 with --without-psm
<br>
this is safe for --disable-dlopen or --enable-static, and you do not need
<br>
to tweak the conf files
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, September 3, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might have missed some context when proposing this solution. As Gilles
</span><br>
<span class="quotelev1">&gt; suggested if you build Open MPI without support for dlopen (configure
</span><br>
<span class="quotelev1">&gt; option --disable-dlopen) this simple solution will not work because the
</span><br>
<span class="quotelev1">&gt; symbol conflict issue is generated deep inside the constructors of the 2
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the &quot;mtl = ^psm&quot; (or ^psm2 depending on which one you want to
</span><br>
<span class="quotelev1">&gt; disable) should go in the openmpi-mca-params.conf that gets installed in
</span><br>
<span class="quotelev1">&gt; the $(sysconfigdir).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 3, 2015 at 5:14 AM, Michal Schmidt &lt;mschmidt_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','mschmidt_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [I apologize for not threading the email properly. I was not subscribed
</span><br>
<span class="quotelev2">&gt;&gt; before and found the conversation in the web archive.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am the one who discovered the PSM vs. PSM2 library conflict and
</span><br>
<span class="quotelev2">&gt;&gt; proposed the temporary workaround of having two builds of the openmpi
</span><br>
<span class="quotelev2">&gt;&gt; package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. Except if the distro builds OMPI statically, I see no reason to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have 2 build of OMPI due to conflicting symbols between two shared
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the OMPI system wide configuration file is not enough to solve the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for this suggestion. It would go into openmpi-mca-params.conf,
</span><br>
<span class="quotelev2">&gt;&gt; right? I will try it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michal
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17927.php">http://www.open-mpi.org/community/lists/devel/2015/09/17927.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17930.php">Mark Santcroos: "[OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Previous message:</strong> <a href="17928.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17928.php">George Bosilca: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
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
