<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 23:00:46 2015" -->
<!-- isoreceived="20150701030046" -->
<!-- sent="Tue, 30 Jun 2015 21:00:44 -0600" -->
<!-- isosent="20150701030044" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="CAF1Cqj6RV-=HhToPqrExjuC6GwdKVMDK0CeWJ9J9zdoopvduhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OFE8EBC7C0.FE28EDA7-ON86257E74.007765DB-86257E74.0078E939_at_us.ibm.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 23:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
<li><strong>In reply to:</strong> <a href="17571.php">Geoffrey Paulsen: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Geoff,
<br>
<p>This is kind of what I suspected.  I think its a very bad design decision
<br>
to
<br>
have the open mpi runtime under the hood setting Open MP environment
<br>
variables.  At the very minimum, there should be an mca parameter to over
<br>
ride
<br>
this, or alternatively, this section of code would only be compiled based
<br>
on
<br>
compiler specific sentinel macros.
<br>
<p>The whole open MP env. variable thing is kind of a mess.  I know this based
<br>
on
<br>
experience at my former employer working with a variety of open MP compiler
<br>
runtimes to make sure they worked well with my former employer's alps
<br>
runtime system.
<br>
<p>This should have been an RFC, not something coming in on a Sunday without
<br>
a review request.
<br>
<p>I was using PGI 12.9 on carver.
<br>
<p>What I absolutely do not like is having something like this coming in on
<br>
a weekend without a review then having ex post facto to spend
<br>
time cleaning up.
<br>
<p>Anyway, a wall will be put in place around the v2.x release to avoid these
<br>
kind of surprises there.
<br>
<p>Needless to say I will not be admitting this PR in to v2.x until its cleaned
<br>
up enough to work with all major compilers, or else is only activated when
<br>
OMPI is compiled with an Intel compiler.
<br>
<p>Howard
<br>
<p><p>2015-06-30 16:00 GMT-06:00 Geoffrey Paulsen &lt;gpaulsen_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I discussed with Robert Ho who was working with Ralph on this option.  He
</span><br>
<span class="quotelev1">&gt; believes it's possible that the PGI compiler / runtime does not understand
</span><br>
<span class="quotelev1">&gt; OMP_PROC_BIND=SPREAD which was only introduced in OpenMP 4.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately I can't find any docs as the <a href="http://www.pgroup.com/index.htm">http://www.pgroup.com/index.htm</a> is
</span><br>
<span class="quotelev1">&gt; down right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have PGI version 11.8 which only support OpenMP version 3.0, and does
</span><br>
<span class="quotelev1">&gt; not list OMP_PROC_BIND at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in 11.8, PGI supported MP_BIND=yes which would request the PGI runtime
</span><br>
<span class="quotelev1">&gt; libraries to bind processes or threads in a parallel region to phsyical
</span><br>
<span class="quotelev1">&gt; processors (default is no).
</span><br>
<span class="quotelev1">&gt; It also supported MP_BLIST=a,b,c,d  (when MP_BIND was set to yes to map
</span><br>
<span class="quotelev1">&gt; how you wanted threads or processes bound to physical processors 0,1,2,3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a note in the documentation that setting MP_BIND does NOT affect
</span><br>
<span class="quotelev1">&gt; the compiler behavior at all, only the runtime library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Geoffrey (Geoff) Paulsen*
</span><br>
<span class="quotelev1">&gt; Software Engineer - Platform MPI
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *Phone:* 1-720-349-2832
</span><br>
<span class="quotelev1">&gt; * E-mail:* *gpaulsen_at_[hidden]* &lt;gpaulsen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; [image: IBM]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1177 S Belt Line Rd
</span><br>
<span class="quotelev1">&gt; Coppell, TX 75019-4642
</span><br>
<span class="quotelev1">&gt; United States
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Inactive hide details for Howard Pritchard ---06/29/2015 09:27:12
</span><br>
<span class="quotelev1">&gt; PM---I decided just to disable the carver/pgi mtt runs. 2015-]Howard
</span><br>
<span class="quotelev1">&gt; Pritchard ---06/29/2015 09:27:12 PM---I decided just to disable the
</span><br>
<span class="quotelev1">&gt; carver/pgi mtt runs. 2015-06-29 15:10 GMT-06:00 Ralph Castain &lt;rhc_at_ope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 06/29/2015 09:27 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors
</span><br>
<span class="quotelev1">&gt; Sent by: &quot;devel&quot; &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I decided just to disable the carver/pgi mtt runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-29 15:10 GMT-06:00 Ralph Castain &lt;*rhc_at_[hidden]*
</span><br>
<span class="quotelev1">&gt; &lt;rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Very strange then - again, can you run it with the verbose flag and
</span><br>
<span class="quotelev1">&gt;    send me the output? I can't replicate what you are seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    On Mon, Jun 29, 2015 at 4:05 PM, Howard Pritchard &lt;
</span><br>
<span class="quotelev1">&gt;    *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       ibm dataplex and laki ~= cray.  nothing to do with cray.
</span><br>
<span class="quotelev1">&gt;       Cray runs fine since I use aprun there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       2015-06-29 13:54 GMT-06:00 Ralph Castain &lt;*rhc_at_[hidden]*
</span><br>
<span class="quotelev1">&gt;       &lt;rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;          Hmmm...is this some Cray weirdness? I checked the code and it
</span><br>
<span class="quotelev1">&gt;          looks right, and it runs correctly for me on both Mac and Linux. All it is
</span><br>
<span class="quotelev1">&gt;          doing is calling &quot;setenv&quot;, so I'm wondering if there is something
</span><br>
<span class="quotelev1">&gt;          environ-specific going on here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          I added some debug in cast that might help - can you run it on
</span><br>
<span class="quotelev1">&gt;          the Cray with &quot;--mca rtc_base_verbose 5&quot; on the cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          On Mon, Jun 29, 2015 at 1:19 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt;          *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;             Ahh... it's OMP_PROC_BIND, not OMPI_PROC_BIND.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Yes, Ralph just added this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I chatted with him about this on the phone moments ago; he's
</span><br>
<span class="quotelev1">&gt;             pretty sure he knows where to go look to find the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; On Jun 29, 2015, at 12:00 PM, Howard Pritchard &lt;
</span><br>
<span class="quotelev1">&gt;             *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; laki is also showing the errors:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Here's the shortened url:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; *<a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>* &lt;<a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; looks like the badness started with the latest nightly.
</span><br>
<span class="quotelev2">&gt;             &gt; I think there was some activity in the orte binding area
</span><br>
<span class="quotelev1">&gt;             recently.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Howard
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; 2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt;             *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;             &gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Or, if the MTT results are not on the community reporter,
</span><br>
<span class="quotelev1">&gt;             can you show a bit more context in the output?
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;
</span><br>
<span class="quotelev1">&gt;             *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; I'm seeing an error I've not seen before in the MTT runs
</span><br>
<span class="quotelev1">&gt;             on the ibm dataplex
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; at NERSC.  The mpirun launched jobs are failing with
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; OMPI_PROC_BIND value is invalid
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; errors.
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; This is is for the trivial ring tests.
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; Is anyone else seeing these types of errors?
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt;             &gt; &gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;             &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; --
</span><br>
<span class="quotelev2">&gt;             &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;             &gt; *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;             &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;             &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Jeff Squyres
</span><br>
<span class="quotelev1">&gt; *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>*
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          Subscription:
</span><br>
<span class="quotelev1">&gt;          *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;          &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17567.php">http://www.open-mpi.org/community/lists/devel/2015/06/17567.php</a>*
</span><br>
<span class="quotelev1">&gt;          &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17567.php">http://www.open-mpi.org/community/lists/devel/2015/06/17567.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;       Subscription: *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;       Link to this post:
</span><br>
<span class="quotelev1">&gt;       *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17568.php">http://www.open-mpi.org/community/lists/devel/2015/06/17568.php</a>*
</span><br>
<span class="quotelev1">&gt;       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17568.php">http://www.open-mpi.org/community/lists/devel/2015/06/17568.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    devel mailing list
</span><br>
<span class="quotelev1">&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    Subscription: *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev1">&gt;    &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;    Link to this post:
</span><br>
<span class="quotelev1">&gt;    *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17569.php">http://www.open-mpi.org/community/lists/devel/2015/06/17569.php</a>*
</span><br>
<span class="quotelev1">&gt;    &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17569.php">http://www.open-mpi.org/community/lists/devel/2015/06/17569.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17570.php">http://www.open-mpi.org/community/lists/devel/2015/06/17570.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17571.php">http://www.open-mpi.org/community/lists/devel/2015/06/17571.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17573/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17573/3B425639.gif" alt="3B425639.gif">
<!-- attachment="3B425639.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17572.php">Victor Rodriguez: "[OMPI devel] mpiexec without -hosts option"</a>
<li><strong>In reply to:</strong> <a href="17571.php">Geoffrey Paulsen: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
