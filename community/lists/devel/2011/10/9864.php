<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 18:41:56 2011" -->
<!-- isoreceived="20111019224156" -->
<!-- sent="Wed, 19 Oct 2011 18:41:51 -0400" -->
<!-- isosent="20111019224151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="EB53B17D-63AB-49F6-BE1D-EBB254680F52_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC4BD8C.7466%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 18:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9863.php">Nathan Hjelm: "[OMPI devel] RFC: upgrade to libevent 2.0.13 (removing 2.0.7)"</a>
<li><strong>In reply to:</strong> <a href="9862.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A careful reading of the committed patch, would have pointed out that none of the concerns raised so far were true, the &quot;old-way&quot; behavior of the OMPI code was preserved. Moreover, every single of the error codes removed were not used in ages.
<br>
<p>What Brian pointed out as evil, evil being a subjective notion by itself, didn't prevent the correct behavior of the code, nor affected in any way it's correctness. Anyway, to address his concern I pushed a patch (25333) putting the OMPI error codes back where they were originally.
<br>
<p>In other words we spent a very unproductive day, arguing over unfounded arguments and &quot;thought-to-be&quot; behaviors.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Oct 19, 2011, at 17:50 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote the error code gorp; I'm pretty sure I know exactly how it was
</span><br>
<span class="quotelev1">&gt; supposed to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are 58 codes unused between OPAL_NETWORK_NOT_PARSEABLE and
</span><br>
<span class="quotelev1">&gt; OPAL_ERR_MAX.  I now see what you did with ERR_REQUEST, and it's evil.
</span><br>
<span class="quotelev1">&gt; THat's not the intent of the error code logic at all.  If you want to
</span><br>
<span class="quotelev1">&gt; change that, I'm not necessarily opposed to it, but that's something that
</span><br>
<span class="quotelev1">&gt; should be discussed in an RFC.  What the current code does is not
</span><br>
<span class="quotelev1">&gt; consistent with the original intent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't agree that you shouldn't propagate error codes through OMPI; in
</span><br>
<span class="quotelev1">&gt; fact, the original intent of the design was to allow such propagation.
</span><br>
<span class="quotelev1">&gt; Again, such a change should be discussed as part of an RFC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/19/11 4:50 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how you think that the error codes work in Open MPI, so I'll
</span><br>
<span class="quotelev2">&gt;&gt; take the liberty to depict it here so we all agree we're talking about
</span><br>
<span class="quotelev2">&gt;&gt; the same thing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The opal_strerror is a nice feature, it allow to register a range of
</span><br>
<span class="quotelev2">&gt;&gt; error codes with a particular error converter. Every time you look for
</span><br>
<span class="quotelev2">&gt;&gt; the meaning of a particular error code, the first convertor with a range
</span><br>
<span class="quotelev2">&gt;&gt; enveloping the looked at value, will translate it into an error string.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is only currently used by OPAL and ORTE directly. It worked at the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI level only because we mapped __all__ OMPI errors to OPAL or ORTE
</span><br>
<span class="quotelev2">&gt;&gt; ones. This behavior didn't change after my patch, you can still use
</span><br>
<span class="quotelev2">&gt;&gt; opal_strerror to get the error string for all OPAL/ORTE/OMPI errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a small &quot;variation&quot; for OMPI_ERR_REQUEST, the only really OMPI
</span><br>
<span class="quotelev2">&gt;&gt; specific error code today. The OMPI error codes are actually inserted
</span><br>
<span class="quotelev2">&gt;&gt; between the OPAL and the ORTE ones (there is a gap of 100 elements), so
</span><br>
<span class="quotelev2">&gt;&gt; there is __no__ possible overlap right now. If at one point we add more
</span><br>
<span class="quotelev2">&gt;&gt; than 100 OMPI level, we should certainly revisit this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now, resulting from my patch, there is a difference. One should not
</span><br>
<span class="quotelev2">&gt;&gt; simply forward an ORTE code into the stack of OMPI, and hope it just
</span><br>
<span class="quotelev2">&gt;&gt; works. Errors should be dealt with where they happens, and if not
</span><br>
<span class="quotelev2">&gt;&gt; possible they should be translated into the actual layer error code. The
</span><br>
<span class="quotelev2">&gt;&gt; error propagation should be compartmentalized, and has to be translated
</span><br>
<span class="quotelev2">&gt;&gt; into an error code that has a meaning at the OMPI level. The current
</span><br>
<span class="quotelev2">&gt;&gt; patch should not prevent the mixed error-code code to work, as
</span><br>
<span class="quotelev2">&gt;&gt; opal_strerror retains the same behavior as before. However, this coding
</span><br>
<span class="quotelev2">&gt;&gt; practice should be avoided. I tried to clean the current code of such
</span><br>
<span class="quotelev2">&gt;&gt; instances few days ago in r25230.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, this is similar to how we deal with the error codes between
</span><br>
<span class="quotelev2">&gt;&gt; OMPI and MPI layers, and seems like a sane way to compose libraries. You
</span><br>
<span class="quotelev2">&gt;&gt; deal with a specific layer error code when you get it (usually after the
</span><br>
<span class="quotelev2">&gt;&gt; call to a function from that specific layer), not later on when you don't
</span><br>
<span class="quotelev2">&gt;&gt; even know exactly what the execution path was.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: I'll fix the +/- issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 19, 2011, at 14:09 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oy, yes, that is bad -- we cannot have overlapping ORTE and OMPI error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; codes. That seems like a very bad idea (in addition to the mixing of +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and -).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For one thing, that breaks opal_strerror().  That, in itself, seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like a dealbreaker.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 19, 2011, at 1:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I actually think it's worse than that.  An ORTE error code can now have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same error code as an OMPI error.  OMPI_ERR_REQUEST and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE_ERR_RECV_LESS_THANK_POSTED now share the same integer return code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or, they should, if George hadn't made a mistake (see below).  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sharing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of return codes seems... bad.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, there's a bug in George's patch.  Error codes are all negative,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_ERR_REQUEST should be OMPI_ERR_BASE -1 and OMPI_ERR_MAX should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_ERR_BASE - 1, not plus 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/19/11 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been wrestling with something from this commit, and I'm unsure of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the right answer. So please consider this a general design question
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the community.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This commit removes all the OMPI &lt;-&gt; ORTE equivalent constants -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i.e., we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used to declare OMPI-prefixed equivalents to every ORTE-prefixed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; constant. I understand the thinking (or at least, what I suspect was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thought), but it creates an issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Suppose I have an ompi-level function (A) that calls another
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi-level
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function (B). Invisible to A is that B calls an orte-level function. B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dutifully checks the error return from the orte-level function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; against an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ORTE-prefixed constant.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, if that return isn't &quot;success&quot;, what does B return up to A?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cannot return the OMPI equivalent to the orte error constant because
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no longer exists. It could return the orte error code, but A has no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; way
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of knowing it is going to get a non-OMPI constant, and therefore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; won't be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to understand it - it will be an &quot;unrecognized error&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess one option is to require that B &quot;translate&quot; the return code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pass some OMPI error up the chain, but this prevents anything upwards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from understanding the nature of the problem and potentially taking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; corrective and/or alternative action. Seems awfully limiting, as most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the time the only option will be the vanilla &quot;OMPI_ERROR&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9863.php">Nathan Hjelm: "[OMPI devel] RFC: upgrade to libevent 2.0.13 (removing 2.0.7)"</a>
<li><strong>In reply to:</strong> <a href="9862.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9865.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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
