<?
$subject_val = "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 03:05:26 2015" -->
<!-- isoreceived="20150701070526" -->
<!-- sent="Wed, 1 Jul 2015 02:05:13 -0500" -->
<!-- isosent="20150701070513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors" -->
<!-- id="CAMD57ocjtmNc8-JPVS-wBXqH0EQYyuYY1GJpcJxKSHBZP=hemg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj6RV-=HhToPqrExjuC6GwdKVMDK0CeWJ9J9zdoopvduhA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 03:05:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17575.php">Paul Hargrove: "[OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ease up there, Howard. This is why we have a &quot;master&quot; branch at OMPI. It is
<br>
a fairly common problem we face as this is a community that supports a very
<br>
broad spectrum of environments, not just a single one where everything is
<br>
known and &quot;canned&quot;.
<br>
<p>Supporting alternative programming models is a common thing we try to do,
<br>
and have done for a long time when they are used in combination with OMPI.
<br>
This is why we support OSHMEM being integrated with OMPI as well. So no new
<br>
ground was broken here.
<br>
<p>As for the process, it was followed to a T and it worked as it should. It
<br>
was submitted to a PR, and passed all tests. We then allowed MTT to run on
<br>
it and received your report of a non-tested error. No problem - that's why
<br>
we do things like MTT.
<br>
<p>Nobody has asked for this in 2.0, and nobody is going to ask for it there
<br>
or in 1.10 until we iron things out in master. Again, this is why we *have*
<br>
a master repo where we can test things out. It is not expected that the
<br>
master will always be perfect, nor has this community ever placed such a
<br>
requirement on itself.
<br>
<p>Now that we know there is an issue with one compiler, and it is isolated to
<br>
just that compiler, we can easily use configure.m4 to protect against it.
<br>
I'll add that protection here shortly.
<br>
<p>So I think all is working process-wise as it should, and we will converge
<br>
to the correct solution that supports our users and members across all
<br>
their environments.
<br>
<p>Ralph
<br>
<p><p>On Tue, Jun 30, 2015 at 10:00 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Geoff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is kind of what I suspected.  I think its a very bad design decision
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; have the open mpi runtime under the hood setting Open MP environment
</span><br>
<span class="quotelev1">&gt; variables.  At the very minimum, there should be an mca parameter to over
</span><br>
<span class="quotelev1">&gt; ride
</span><br>
<span class="quotelev1">&gt; this, or alternatively, this section of code would only be compiled based
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; compiler specific sentinel macros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole open MP env. variable thing is kind of a mess.  I know this
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev1">&gt; experience at my former employer working with a variety of open MP compiler
</span><br>
<span class="quotelev1">&gt; runtimes to make sure they worked well with my former employer's alps
</span><br>
<span class="quotelev1">&gt; runtime system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should have been an RFC, not something coming in on a Sunday without
</span><br>
<span class="quotelev1">&gt; a review request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was using PGI 12.9 on carver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I absolutely do not like is having something like this coming in on
</span><br>
<span class="quotelev1">&gt; a weekend without a review then having ex post facto to spend
</span><br>
<span class="quotelev1">&gt; time cleaning up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, a wall will be put in place around the v2.x release to avoid these
</span><br>
<span class="quotelev1">&gt; kind of surprises there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Needless to say I will not be admitting this PR in to v2.x until its
</span><br>
<span class="quotelev1">&gt; cleaned
</span><br>
<span class="quotelev1">&gt; up enough to work with all major compilers, or else is only activated when
</span><br>
<span class="quotelev1">&gt; OMPI is compiled with an Intel compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-30 16:00 GMT-06:00 Geoffrey Paulsen &lt;gpaulsen_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I discussed with Robert Ho who was working with Ralph on this option.  He
</span><br>
<span class="quotelev2">&gt;&gt; believes it's possible that the PGI compiler / runtime does not understand
</span><br>
<span class="quotelev2">&gt;&gt; OMP_PROC_BIND=SPREAD which was only introduced in OpenMP 4.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I can't find any docs as the
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pgroup.com/index.htm">http://www.pgroup.com/index.htm</a> is down right now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have PGI version 11.8 which only support OpenMP version 3.0, and does
</span><br>
<span class="quotelev2">&gt;&gt; not list OMP_PROC_BIND at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in 11.8, PGI supported MP_BIND=yes which would request the PGI runtime
</span><br>
<span class="quotelev2">&gt;&gt; libraries to bind processes or threads in a parallel region to phsyical
</span><br>
<span class="quotelev2">&gt;&gt; processors (default is no).
</span><br>
<span class="quotelev2">&gt;&gt; It also supported MP_BLIST=a,b,c,d  (when MP_BIND was set to yes to map
</span><br>
<span class="quotelev2">&gt;&gt; how you wanted threads or processes bound to physical processors 0,1,2,3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a note in the documentation that setting MP_BIND does NOT affect
</span><br>
<span class="quotelev2">&gt;&gt; the compiler behavior at all, only the runtime library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Geoffrey (Geoff) Paulsen*
</span><br>
<span class="quotelev2">&gt;&gt; Software Engineer - Platform MPI
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *Phone:* 1-720-349-2832
</span><br>
<span class="quotelev2">&gt;&gt; * E-mail:* *gpaulsen_at_[hidden]* &lt;gpaulsen_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [image: IBM]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1177 S Belt Line Rd
</span><br>
<span class="quotelev2">&gt;&gt; Coppell, TX 75019-4642
</span><br>
<span class="quotelev2">&gt;&gt; United States
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [image: Inactive hide details for Howard Pritchard ---06/29/2015 09:27:12
</span><br>
<span class="quotelev2">&gt;&gt; PM---I decided just to disable the carver/pgi mtt runs. 2015-]Howard
</span><br>
<span class="quotelev2">&gt;&gt; Pritchard ---06/29/2015 09:27:12 PM---I decided just to disable the
</span><br>
<span class="quotelev2">&gt;&gt; carver/pgi mtt runs. 2015-06-29 15:10 GMT-06:00 Ralph Castain &lt;rhc_at_ope
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: 06/29/2015 09:27 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors
</span><br>
<span class="quotelev2">&gt;&gt; Sent by: &quot;devel&quot; &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I decided just to disable the carver/pgi mtt runs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-06-29 15:10 GMT-06:00 Ralph Castain &lt;*rhc_at_[hidden]*
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Very strange then - again, can you run it with the verbose flag and
</span><br>
<span class="quotelev2">&gt;&gt;    send me the output? I can't replicate what you are seeing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    On Mon, Jun 29, 2015 at 4:05 PM, Howard Pritchard &lt;
</span><br>
<span class="quotelev2">&gt;&gt;    *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;       ibm dataplex and laki ~= cray.  nothing to do with cray.
</span><br>
<span class="quotelev2">&gt;&gt;       Cray runs fine since I use aprun there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       2015-06-29 13:54 GMT-06:00 Ralph Castain &lt;*rhc_at_[hidden]*
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;          Hmmm...is this some Cray weirdness? I checked the code and it
</span><br>
<span class="quotelev2">&gt;&gt;          looks right, and it runs correctly for me on both Mac and Linux. All it is
</span><br>
<span class="quotelev2">&gt;&gt;          doing is calling &quot;setenv&quot;, so I'm wondering if there is something
</span><br>
<span class="quotelev2">&gt;&gt;          environ-specific going on here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          I added some debug in cast that might help - can you run it on
</span><br>
<span class="quotelev2">&gt;&gt;          the Cray with &quot;--mca rtc_base_verbose 5&quot; on the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          On Mon, Jun 29, 2015 at 1:19 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt;          *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             Ahh... it's OMP_PROC_BIND, not OMPI_PROC_BIND.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Yes, Ralph just added this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I chatted with him about this on the phone moments ago; he's
</span><br>
<span class="quotelev2">&gt;&gt;             pretty sure he knows where to go look to find the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; On Jun 29, 2015, at 12:00 PM, Howard Pritchard &lt;
</span><br>
<span class="quotelev2">&gt;&gt;             *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; laki is also showing the errors:
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Here's the shortened url:
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; *<a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>* &lt;<a href="http://goo.gl/Ra264U">http://goo.gl/Ra264U</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; looks like the badness started with the latest nightly.
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; I think there was some activity in the orte binding area
</span><br>
<span class="quotelev2">&gt;&gt;             recently.
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; 2015-06-29 9:52 GMT-06:00 Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt;             *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Can you provide an MTT short URL to show the results?
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Or, if the MTT results are not on the community reporter,
</span><br>
<span class="quotelev2">&gt;&gt;             can you show a bit more context in the output?
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; On Jun 29, 2015, at 11:47 AM, Howard Pritchard &lt;
</span><br>
<span class="quotelev2">&gt;&gt;             *hppritcha_at_[hidden]* &lt;hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; Hi Folks,
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; I'm seeing an error I've not seen before in the MTT runs
</span><br>
<span class="quotelev2">&gt;&gt;             on the ibm dataplex
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; at NERSC.  The mpirun launched jobs are failing with
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; OMPI_PROC_BIND value is invalid
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; errors.
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; This is is for the trivial ring tests.
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; Is anyone else seeing these types of errors?
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;             &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17558.php">http://www.open-mpi.org/community/lists/devel/2015/06/17558.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17559.php">http://www.open-mpi.org/community/lists/devel/2015/06/17559.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;             &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17560.php">http://www.open-mpi.org/community/lists/devel/2015/06/17560.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             --
</span><br>
<span class="quotelev2">&gt;&gt;             Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; *jsquyres_at_[hidden]* &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17563.php">http://www.open-mpi.org/community/lists/devel/2015/06/17563.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;          devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;          *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;          *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17567.php">http://www.open-mpi.org/community/lists/devel/2015/06/17567.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;          &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17567.php">http://www.open-mpi.org/community/lists/devel/2015/06/17567.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;       devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Subscription: *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;       *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17568.php">http://www.open-mpi.org/community/lists/devel/2015/06/17568.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17568.php">http://www.open-mpi.org/community/lists/devel/2015/06/17568.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; *devel_at_[hidden]* &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Subscription: *<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>*
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;    *<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17569.php">http://www.open-mpi.org/community/lists/devel/2015/06/17569.php</a>*
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17569.php">http://www.open-mpi.org/community/lists/devel/2015/06/17569.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17570.php">http://www.open-mpi.org/community/lists/devel/2015/06/17570.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17571.php">http://www.open-mpi.org/community/lists/devel/2015/06/17571.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17573.php">http://www.open-mpi.org/community/lists/devel/2015/06/17573.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17574/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17574/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-17574/3B425639.gif" alt="3B425639.gif">
<!-- attachment="3B425639.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17575.php">Paul Hargrove: "[OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17573.php">Howard Pritchard: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
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
