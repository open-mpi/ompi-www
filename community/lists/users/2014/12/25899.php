<?
$subject_val = "Re: [OMPI users] OpenMPI with blcr problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 15:30:25 2014" -->
<!-- isoreceived="20141201203025" -->
<!-- sent="Mon, 1 Dec 2014 13:29:38 -0700" -->
<!-- isosent="20141201202938" -->
<!-- name="Dewan Ibtesham (Shafi)" -->
<!-- email="dewan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with blcr problem" -->
<!-- id="CAKfG0+r6aXWn+TC-8vjHJQ_42ejwJ=K4j64p53rmP6qv6EDE6w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] OpenMPI with blcr problem" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with blcr problem<br>
<strong>From:</strong> Dewan Ibtesham (Shafi) (<em>dewan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 15:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Previous message:</strong> <a href="25898.php">J&#246;rg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="25897.php">Dewan Ibtesham (Shafi): "[OMPI users] OpenMPI with blcr problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Reply:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the problem was with open mpi 1.8.3. I went back to my older
<br>
installation 1.6.5 and was able to compile with blcr.
<br>
<p>Thanks
<br>
<p>DI
<br>
<p>On Mon, Dec 1, 2014 at 11:40 AM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: &quot;default-only MCA variable&quot;? (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;    2. Re: &quot;default-only MCA variable&quot;? (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;    3. OpenMPI with blcr problem (Dewan Ibtesham (Shafi))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 1 Dec 2014 09:47:32 -0800
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] &quot;default-only MCA variable&quot;?
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;87E1BA37-4D50-453E-8E78-8C6209B0DF12_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=utf-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 28, 2014, at 10:08 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It could be because configure did not find the knem headers and hence
</span><br>
<span class="quotelev1">&gt; knem is not supported and hence this mca parameter is read-only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, in that case (though knem was meant to be used and it's annoying
</span><br>
<span class="quotelev2">&gt; &gt; that configure doesn't abort if it doesn't find something you've
</span><br>
<span class="quotelev2">&gt; &gt; explicitly asked for, and I didn't immediately need it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I dug into this and found why we weren?t aborting if knem was
</span><br>
<span class="quotelev1">&gt; specified and not found. This obviously isn?t the specified OMPI behavior,
</span><br>
<span class="quotelev1">&gt; so I fixed it in the trunk and will port it back to v1.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  However, I got
</span><br>
<span class="quotelev2">&gt; &gt; the same for at least mpi_abort_print_stack with that parameter set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I?m not entirely familiar with the thinking behind it, but it appears that
</span><br>
<span class="quotelev1">&gt; some MCA params are intended solely for reporting purposes and are
</span><br>
<span class="quotelev1">&gt; therefore not really ?settable?. The ?have_knem_support? is one such
</span><br>
<span class="quotelev1">&gt; example, and it sounds like you may have found some others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I?ll ask around and see why we did that as I can understand how it would
</span><br>
<span class="quotelev1">&gt; be confusing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This didn't happen with OMPI 1.6 and there's no obvious way to turn it
</span><br>
<span class="quotelev2">&gt; &gt; off.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25887.php">http://www.open-mpi.org/community/lists/users/2014/11/25887.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 1 Dec 2014 17:57:34 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] &quot;default-only MCA variable&quot;?
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;94C5E448-65D9-40A2-838F-2E511359FB18_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;Windows-1252&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2014, at 12:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I?m not entirely familiar with the thinking behind it, but it appears
</span><br>
<span class="quotelev1">&gt; that some MCA params are intended solely for reporting purposes and are
</span><br>
<span class="quotelev1">&gt; therefore not really ?settable?. The ?have_knem_support? is one such
</span><br>
<span class="quotelev1">&gt; example, and it sounds like you may have found some others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.  We call these &quot;info&quot; MCA params.  They've been around for a
</span><br>
<span class="quotelev1">&gt; long, long time, but I think they may have gotten renamed (at least in the
</span><br>
<span class="quotelev1">&gt; output) in the MCA revamp in the 1.7/1.8 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we need less confusing output in this area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Mon, 1 Dec 2014 11:39:53 -0700
</span><br>
<span class="quotelev1">&gt; From: &quot;Dewan Ibtesham (Shafi)&quot; &lt;dewan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI with blcr problem
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;
</span><br>
<span class="quotelev1">&gt; CAKfG0+o_hzu3-gi40vz7JztSA-0QD8J2N0hpgFyAhmdQSC6b3g_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build blcr with openmpi. I have done it before without any
</span><br>
<span class="quotelev1">&gt; problem with earlier versions of openMPI but having problem on
</span><br>
<span class="quotelev1">&gt; 1.8.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to configure, I get the following warning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;configure:298525: WARNING: unrecognized options: --with-ft, --with-blcr&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --help also doesn't provide any blcr related inputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went ahead and built it anyway and the following libraries are generated
</span><br>
<span class="quotelev1">&gt; instead of blcr specific ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_crs_none.la
</span><br>
<span class="quotelev1">&gt; mca_crs_none.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is the config log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DI
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: config.log.tgz
</span><br>
<span class="quotelev1">&gt; Type: application/x-gzip
</span><br>
<span class="quotelev1">&gt; Size: 191361 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/MailArchives/users/attachments/20141201/482bd290/attachment.tgz">http://www.open-mpi.org/MailArchives/users/attachments/20141201/482bd290/attachment.tgz</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 3057, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Previous message:</strong> <a href="25898.php">J&#246;rg Stiller: "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran"</a>
<li><strong>Maybe in reply to:</strong> <a href="25897.php">Dewan Ibtesham (Shafi): "[OMPI users] OpenMPI with blcr problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Reply:</strong> <a href="25900.php">Ralph Castain: "Re: [OMPI users] OpenMPI with blcr problem"</a>
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
