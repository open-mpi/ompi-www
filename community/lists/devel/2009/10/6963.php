<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 09:09:30 2009" -->
<!-- isoreceived="20091013130930" -->
<!-- sent="Tue, 13 Oct 2009 09:08:13 -0400" -->
<!-- isosent="20091013130813" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="4AD47BBD.40405_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AD363BA.6040904_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 09:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6962.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6962.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After rereading the manpage for the umpteenth time I agree with Eugene 
<br>
that the information provided on cartofile is next to useless.   Ok, so 
<br>
you describe what your node looks like but what does mpirun or libmpi do 
<br>
with that information?  Other than the option to provide the cartofile 
<br>
it isn't obvious how a user or libmpi uses this information.
<br>
<p>I've looked on the faq and wiki and have not found anything yet on how 
<br>
one &quot;current&quot; uses cartofile.
<br>
<p>--td
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; This e-mail was on the users alias... see 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There wasn't much response, so let me ask another question.  How about 
</span><br>
<span class="quotelev1">&gt; if we remove the cartofile section from the DESCRIPTION section of the 
</span><br>
<span class="quotelev1">&gt; OMPI mpirun man page?  It's a lot of text that illustrates how to 
</span><br>
<span class="quotelev1">&gt; create a cartofile without saying anything about why one would want to 
</span><br>
<span class="quotelev1">&gt; go to the trouble.  What does this impact?  What does it change?  
</span><br>
<span class="quotelev1">&gt; What's the motivation for doing this stuff?  What's this stuff good for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another alternative could be to move the cartofile description to a 
</span><br>
<span class="quotelev1">&gt; FAQ page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun man page is rather long and I was thinking that if we could 
</span><br>
<span class="quotelev1">&gt; remove some &quot;low impact&quot; stuff out, we could improve the overall 
</span><br>
<span class="quotelev1">&gt; signal-to-noise ratio of the page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, I personally would like to know what cartofiles are good for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, but I don't understand who is consuming this information 
</span><br>
<span class="quotelev2">&gt;&gt; for what.  E.g., the mpirun man page describes the carto file, but 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't give users any indication whether they should be worrying 
</span><br>
<span class="quotelev2">&gt;&gt; about this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carto file is a file with a staic graph topology of your node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the opal/mca/carto/file/carto_file.h you can see example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( yes I know that , it should be help/man list :) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically it describes a map of your node and inside interconnection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully it will be discovered automatically someday,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but for now you can describe your node manually.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I feel like I should know, but what's a cartofile?  I guess you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     supply &quot;topological&quot; information about a host, but I can't tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     how this information is used by, say, mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6962.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6962.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
