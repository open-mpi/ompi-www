<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 18:01:02 2015" -->
<!-- isoreceived="20150630220102" -->
<!-- sent="Tue, 30 Jun 2015 17:00:40 -0500" -->
<!-- isosent="20150630220040" -->
<!-- name="Geoffrey Paulsen" -->
<!-- email="gpaulsen_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="OFE8EBC7C0.FE28EDA7-ON86257E74.007765DB-86257E74.0078E939_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj5cUbx97rz=33ysKE1DsFU9_LDvXNtZ4FtqoFj3kcZbtA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors<br>
<strong>From:</strong> Geoffrey Paulsen (<em>gpaulsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 18:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
<li><strong>Previous message:</strong> <a href="17570.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17570.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discussed with Robert Ho who was working with Ralph on this option.  He
<br>
believes it's possible that the PGI compiler / runtime does not understand
<br>
OMP_PROC_BIND=SPREAD which was only introduced in OpenMP 4.0.
<br>
<p>Unfortunately I can't find any docs as the <a href="http://www.pgroup.com/index.htm">http://www.pgroup.com/index.htm</a>
<br>
is down right now.
<br>
<p>We have PGI version 11.8 which only support OpenMP version 3.0, and does
<br>
not list OMP_PROC_BIND at all.
<br>
<p>in 11.8, PGI supported MP_BIND=yes which would request the PGI runtime
<br>
libraries to bind processes or threads in a parallel region to phsyical
<br>
processors (default is no).
<br>
It also supported MP_BLIST=a,b,c,d  (when MP_BIND was set to yes to map how
<br>
you wanted threads or processes bound to physical processors 0,1,2,3.
<br>
<p>There is a note in the documentation that setting MP_BIND does NOT affect
<br>
the compiler behavior at all, only the runtime library.
<br>
<p><p>Regards,
<br>
<p>Geoffrey (Geoff) Paulsen
<br>
Software Engineer - Platform MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;Phone: 1-720-349-2832                                                          IBM 
<br>
&nbsp;E-mail: gpaulsen_at_[hidden]                                                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1177 S Belt Line Rd 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coppell, TX 75019-4642 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;United States 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p><p>From:	Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
To:	Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Date:	06/29/2015 09:27 PM
<br>
Subject:	Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors
<br>
Sent by:	&quot;devel&quot; &lt;devel-bounces_at_[hidden]&gt;
<br>
<p><p><p>I decided just to disable the carver/pgi mtt runs.
<br>
<p><p>2015-06-29 15:10 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
&nbsp;&nbsp;Very strange then - again, can you run it with the verbose flag and send
<br>
&nbsp;&nbsp;me the output? I can't replicate what you are seeing.
<br>
<p><p>&nbsp;&nbsp;On Mon, Jun 29, 2015 at 4:05 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
&nbsp;&nbsp;wrote:
<br>
&nbsp;&nbsp;&nbsp;ibm dataplex and laki ~= cray. &#160;nothing to do with cray.
<br>
&nbsp;&nbsp;&nbsp;Cray runs fine since I use aprun there.
<br>
<p><p>&nbsp;&nbsp;&nbsp;2015-06-29 13:54 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hmmm...is this some Cray weirdness? I checked the code and it looks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right, and it runs correctly for me on both Mac and Linux. All it is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;doing is calling &quot;setenv&quot;, so I'm wondering if there is something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;environ-specific going on here?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I added some debug in cast that might help - can you run it on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cray with &quot;--mca rtc_base_verbose 5&quot; on the cmd line?
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Mon, Jun 29, 2015 at 1:19 PM, Jeff Squyres (jsquyres) &lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jsquyres_at_[hidden]&gt; wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahh... it's OMP_PROC_BIND, not OMPI_PROC_BIND.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, Ralph just added this.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I chatted with him about this on the phone moments ago; he's pretty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sure he knows where to go look to find the problem.
<br>
<p><p><span class="quotelev1">      &gt; On Jun 29, 2015, at 12:00 PM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">      &gt; wrote:
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; laki is also showing the errors:
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; Here's the shortened url:
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; <a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; looks like the badness started with the latest nightly.
</span><br>
<span class="quotelev1">      &gt; I think there was some activity in the orte binding area recently.
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; Howard
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; 2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">      &gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; Or, if the MTT results are not on the community reporter, can you
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show a bit more context in the output?
<br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hppritcha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; I'm seeing an error I've not seen before in the MTT runs on the
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibm dataplex
<br>
<span class="quotelev2">      &gt; &gt; at NERSC.&#160; The mpirun launched jobs are failing with
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; OMPI_PROC_BIND value is invalid
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; errors.
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; This is is for the trivial ring tests.
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; Is anyone else seeing these types of errors?
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; Howard
</span><br>
<span class="quotelev2">      &gt; &gt;
</span><br>
<span class="quotelev2">      &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">      &gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">      &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">      &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">      &gt; &gt; Link to this post:
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>
<br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; --
</span><br>
<span class="quotelev1">      &gt; Jeff Squyres
</span><br>
<span class="quotelev1">      &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">      &gt; For corporate legal information go to:
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; _______________________________________________
</span><br>
<span class="quotelev1">      &gt; devel mailing list
</span><br>
<span class="quotelev1">      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">      &gt; Link to this post:
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>
<br>
<span class="quotelev1">      &gt;
</span><br>
<span class="quotelev1">      &gt; _______________________________________________
</span><br>
<span class="quotelev1">      &gt; devel mailing list
</span><br>
<span class="quotelev1">      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">      &gt; Link to this post:
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jsquyres_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For corporate legal information go to:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devel_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17567.php">http://www.open-mpi.org/community/lists/devel/2015/06/17567.php</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;devel mailing list
<br>
&nbsp;&nbsp;&nbsp;devel_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;&nbsp;Link to this post:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17568.php">http://www.open-mpi.org/community/lists/devel/2015/06/17568.php</a>
<br>
<p><p>&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;devel mailing list
<br>
&nbsp;&nbsp;devel_at_[hidden]
<br>
&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
&nbsp;&nbsp;Link to this post:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17569.php">http://www.open-mpi.org/community/lists/devel/2015/06/17569.php</a>
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17570.php">http://www.open-mpi.org/community/lists/devel/2015/06/17570.php</a>
<br>
<p>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17571/3B425639.gif" alt="3B425639.gif">
<!-- attachment="3B425639.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17571/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
<li><strong>Previous message:</strong> <a href="17570.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="17570.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
