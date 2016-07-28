<?
$subject_val = "Re: [OMPI devel] rankfile questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 08:01:52 2008" -->
<!-- isoreceived="20080319120152" -->
<!-- sent="Wed, 19 Mar 2008 08:01:41 -0400" -->
<!-- isosent="20080319120141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile questions" -->
<!-- id="A27AEFE4-D566-4180-9318-4EE52310185D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CAE14CBA_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rankfile questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-19 08:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you're right -- we should have reviewed this code 2 weeks ago  
<br>
when you asked.  Sorry about that.  :-\
<br>
<p>Per adding lots of affinity code in ompi_mpi_init.c: perhaps those  
<br>
code belongs down in the paffinity (or rmaps?) base.  It doesn't have  
<br>
to become part of any specific paffinity component (because it can be  
<br>
used with any paffinity component)  This makes it callable by anyone  
<br>
(including orte) and keeps the abstraction barriers clean.
<br>
<p><p><p>On Mar 19, 2008, at 5:36 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; 1. I see a getenv(&quot;slot_list&quot;) in the MPI side of the code; it
</span><br>
<span class="quotelev1">&gt; looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like $slot_list is set by the odls for the MPI process.  Why isn't
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an MCA parameter?  That's what all other values passed by the orted
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI process appear to be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;slot_list&quot; consist of socket:core pair for the rank to be bind to.  
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; info changes according to rankfile and different for each node and  
</span><br>
<span class="quotelev1">&gt; rank,
</span><br>
<span class="quotelev1">&gt; therefore it cannot be passed via mca parameter.
</span><br>
<p>I don't follow the logic here.  MCA parameters can certainly be unique  
<br>
per MPI process...
<br>
<p>Remember that MCA parameters can be environment variables.  The  
<br>
advantage of using MCA params as env variables is that we enforce a  
<br>
common prefix to ensure that we don't collide with other environment  
<br>
variables.  There's functions to get the environment variable names of  
<br>
MCA parameters, for example, so that you can setenv them to pass them  
<br>
to another process (e.g., in the odls).  Then you use the normal MCA  
<br>
parameter lookup functions to retrieve them in the target/receiver  
<br>
process.
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; 2. I see that ompi_mpi_params.c is now registering 2 rmaps-level
</span><br>
<span class="quotelev1">&gt; MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters.  Why?  Shouldn't these be in ORTE somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you mean paffinity_alone and rank_file_debug, then
</span><br>
<span class="quotelev1">&gt; 1. paffinity_alone was there before.
</span><br>
<span class="quotelev1">&gt; 2. After getting some answers from Ralph about orte_debug in
</span><br>
<span class="quotelev1">&gt; ompi_mpi_init I intend to introduce ompi_debug mca parameter that will
</span><br>
<span class="quotelev1">&gt; be used in this library and rank_file_debug will be removed.
</span><br>
<p>rmaps_rank_file_path and rmaps_rank_file_debug.  These have no place  
<br>
being registered in the OMPI layer.
<br>
<p>It looks like rank_file_path is only registered in ompi_mpi_init.c as  
<br>
an error check.  Why isn't this done in the rmaps rankfile component  
<br>
itself?  This would execute in mpirun and avoid launching at all if an  
<br>
error is detected (vs. detecting the error in each MPI process and  
<br>
aborting each one).
<br>
<p><span class="quotelev3">&gt;&gt;&gt; A few more notes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Most of the files in orte/mca/rmaps/rankfile do not obey the
</span><br>
<span class="quotelev1">&gt; prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rule.  I think that they should be renamed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank_file component was copied from round_robin, I thought it would be
</span><br>
<span class="quotelev1">&gt; strange if it would look differently.
</span><br>
<p>Blah -- it looks like round robin's files don't adhere to the prefix  
<br>
rule.  In fairness, those files *may* be so old to predate the prefix  
<br>
rule...?
<br>
<p>Regardless, I think the rankfile files should be named in accordance  
<br>
with the rest of the code base and adhere to the prefix rule.  round  
<br>
robin should probably be fixed as well.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 4. A quick look through rankfile_lex.l seems to show that there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global variables that are not protected by the prefix rule (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; static).  Ditto in rmaps_rf.c.  These should be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean?
</span><br>
<p>&nbsp;From lex.l:
<br>
<p>int rank_file_line=1;
<br>
rank_file_value_t rank_file_value;
<br>
bool rank_file_done = false;
<br>
<p>These are neither static nor do they adhere to the prefix rule  
<br>
(obviously, if a symbol is static, it doesn't have to adhere to the  
<br>
prefix rule).  Ditto for &quot;rank_file_path&quot; and &quot;rankmap&quot; in  
<br>
rmaps_rf.c.  There may be others; that's all I looked through (e.g., I  
<br>
didn't check other files or check function symbols).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3475.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
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
