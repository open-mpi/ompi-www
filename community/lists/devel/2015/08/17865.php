<?
$subject_val = "Re: [OMPI devel] cosmetic misleading mpirun error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 06:25:24 2015" -->
<!-- isoreceived="20150826102524" -->
<!-- sent="Wed, 26 Aug 2015 10:25:21 +0000" -->
<!-- isosent="20150826102521" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cosmetic misleading mpirun error message" -->
<!-- id="CC21A0C4-CA09-4D21-B54A-2A288D4330F3_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5vkh2T5ZBSMd_pP1O0FQhXvpj+xtxNB=t_mSbDnKgRYww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cosmetic misleading mpirun error message<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 06:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17866.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that the issue is that &quot;--&lt;FOO&gt;&quot; is interpreted to mean that &lt;FOO&gt; should be interpreted as a single string, but &quot;-&lt;FOO&gt;&quot; is interpreted to mean that each letter of &lt;FOO&gt; should be interpreted individually.
<br>

<br>
This is a fairly common Linux/POSIX/GNU convention.
<br>

<br>
As for &quot;--host&quot; vs. &quot;--hosts&quot;, we initially got the option name from the MPI spec, where it describes mpiexec (e.g., MPI-3.1 section 8.8, page 362).  I wouldn't argue if we wanted to put in a synonym for --host and --hosts.  But this would probably be suitable for master/v2.x -- probably not v1.10.x (which is intended to be short-lived and replaced by v2.x &quot;soon&quot;).
<br>

<br>

<br>
<span class="quotelev1">&gt; On Aug 25, 2015, at 9:10 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; would it be easier if the option was --host instead of -host ?
</span><br>
<span class="quotelev1">&gt; I guess changing the cli is not an option for the v1.x series, so what about adding the -hosts option (alias to -host option) ?
</span><br>
<span class="quotelev1">&gt; I made the same mistake a few times before, adding a s to hosts looks more intuitive for me.
</span><br>
<span class="quotelev1">&gt; my 0.02 US$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, August 26, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Fair point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if there's an easy way to fix that, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 25, 2015, at 6:01 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Playing with the 1.10.0 (just released) build I found a cosmetic misleading error message in mpirun. If by mistake you type -hosts (with an extra  &#226;&#128;&#156;s&#226;&#128;&#157;), the error message complains about an actually not being used. Typing the parameters correctly fixes the issue J
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; m&gt; mpirun --allow-run-as-root -hosts m7,m8 -np 2  osu_latency
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: Error: unknown option &quot;-o&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _MAC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17854.php">http://www.open-mpi.org/community/lists/devel/2015/08/17854.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17855.php">http://www.open-mpi.org/community/lists/devel/2015/08/17855.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17858.php">http://www.open-mpi.org/community/lists/devel/2015/08/17858.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17866.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17864.php">Paul Hargrove: "Re: [OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>In reply to:</strong> <a href="17858.php">Gilles Gouaillardet: "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
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
