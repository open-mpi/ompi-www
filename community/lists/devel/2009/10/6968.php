<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 14:12:29 2009" -->
<!-- isoreceived="20091013181229" -->
<!-- sent="Tue, 13 Oct 2009 12:12:18 -0600" -->
<!-- isosent="20091013181218" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="C26D7F2F-99B9-42EB-94B2-EFE804EC0069_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A6F9996F53BA4A9B827198D630B98BF2_at_wattp4" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] cartofile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 14:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We agreed on today's telecon to leave the code in the OMPI code base  
<br>
for now, but to remove the option from the mpirun man page since  
<br>
nobody can explain how to use it anyway.
<br>
<p>Then we will wait in hope that someone(s) complete the coding of this  
<br>
&quot;feature&quot; and document its use.
<br>
<p>On Oct 13, 2009, at 12:09 PM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; I agree with Terry and Eugene, but now what are we going to do about  
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev1">&gt; This is a potentially very powerful feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Terry Dontje
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 13, 2009 7:08 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI users] cartofile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After rereading the manpage for the umpteenth time I agree
</span><br>
<span class="quotelev2">&gt;&gt; with Eugene
</span><br>
<span class="quotelev2">&gt;&gt; that the information provided on cartofile is next to
</span><br>
<span class="quotelev2">&gt;&gt; useless.   Ok, so
</span><br>
<span class="quotelev2">&gt;&gt; you describe what your node looks like but what does mpirun
</span><br>
<span class="quotelev2">&gt;&gt; or libmpi do with that information?  Other than the option to
</span><br>
<span class="quotelev2">&gt;&gt; provide the cartofile it isn't obvious how a user or libmpi
</span><br>
<span class="quotelev2">&gt;&gt; uses this information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've looked on the faq and wiki and have not found anything
</span><br>
<span class="quotelev2">&gt;&gt; yet on how one &quot;current&quot; uses cartofile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail was on the users alias... see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There wasn't much response, so let me ask another question.
</span><br>
<span class="quotelev2">&gt;&gt; How about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if we remove the cartofile section from the DESCRIPTION
</span><br>
<span class="quotelev2">&gt;&gt; section of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI mpirun man page?  It's a lot of text that illustrates how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create a cartofile without saying anything about why one
</span><br>
<span class="quotelev2">&gt;&gt; would want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go to the trouble.  What does this impact?  What does it change?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's the motivation for doing this stuff?  What's this
</span><br>
<span class="quotelev2">&gt;&gt; stuff good for?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another alternative could be to move the cartofile description to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAQ page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpirun man page is rather long and I was thinking that
</span><br>
<span class="quotelev2">&gt;&gt; if we could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove some &quot;low impact&quot; stuff out, we could improve the overall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal-to-noise ratio of the page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any case, I personally would like to know what
</span><br>
<span class="quotelev2">&gt;&gt; cartofiles are good for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, but I don't understand who is consuming this
</span><br>
<span class="quotelev2">&gt;&gt; information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for what.  E.g., the mpirun man page describes the carto file, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't give users any indication whether they should be worrying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; carto file is a file with a staic graph topology of your node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the opal/mca/carto/file/carto_file.h you can see example.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( yes I know that , it should be help/man list :) ) Basically it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; describes a map of your node and inside interconnection.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hopefully it will be discovered automatically someday,
</span><br>
<span class="quotelev2">&gt;&gt; but for now
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you can describe your node manually.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    I feel like I should know, but what's a cartofile?  I
</span><br>
<span class="quotelev2">&gt;&gt; guess you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    supply &quot;topological&quot; information about a host, but I
</span><br>
<span class="quotelev2">&gt;&gt; can't tell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    how this information is used by, say, mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
