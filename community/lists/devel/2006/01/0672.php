<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 09:33:34 2006" -->
<!-- isoreceived="20060113143334" -->
<!-- sent="Fri, 13 Jan 2006 09:33:28 -0500" -->
<!-- isosent="20060113143328" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  f77_check.m4 changes" -->
<!-- id="540FD9A8-9CCC-4ADE-AD3C-20703E0937F4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060113142809.GB27830_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 09:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I should have used the m4_ifval :/.  What platform were you  
<br>
seeing badness on?  I know there's something with gfortran on 64bit  
<br>
linux and it seems to work on 32bit linux with gfortran.
<br>
<p>Brian
<br>
<p>On Jan 13, 2006, at 9:28 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you mean this in your recent changes to the trunk?
</span><br>
<span class="quotelev1">&gt; I'm not quite sure, I don't really understand the code
</span><br>
<span class="quotelev1">&gt; at a glance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without it, configure barfs over here because it contains
</span><br>
<span class="quotelev1">&gt;   if ...; then
</span><br>
<span class="quotelev1">&gt;   fi
</span><br>
<span class="quotelev1">&gt; somewhere, which is a shell syntax error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/f77_check.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/f77_check.m4	(revision 8684)
</span><br>
<span class="quotelev1">&gt; +++ config/f77_check.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -70,12 +70,10 @@
</span><br>
<span class="quotelev1">&gt;          else
</span><br>
<span class="quotelev1">&gt;              # Look for a corresponding C type (will abort by  
</span><br>
<span class="quotelev1">&gt; itself if the
</span><br>
<span class="quotelev1">&gt;              # type isn't found and we need it)
</span><br>
<span class="quotelev1">&gt; -            if test &quot;$3&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt; -                OMPI_FIND_TYPE([$1], [$3], [$2], [$ofc_type_size],  
</span><br>
<span class="quotelev1">&gt; [ofc_c_type])
</span><br>
<span class="quotelev1">&gt; -                if test -z &quot;$ofc_c_type&quot;; then
</span><br>
<span class="quotelev1">&gt; -                    ofc_have_type=
</span><br>
<span class="quotelev1">&gt; -                fi
</span><br>
<span class="quotelev1">&gt; -            fi
</span><br>
<span class="quotelev1">&gt; +	    m4_ifval([$3], [OMPI_FIND_TYPE([$1], [$3], [$2],  
</span><br>
<span class="quotelev1">&gt; [$ofc_type_size], [ofc_c_type])
</span><br>
<span class="quotelev1">&gt; +			    if test -z &quot;$ofc_c_type&quot;; then
</span><br>
<span class="quotelev1">&gt; +				ofc_have_type=
</span><br>
<span class="quotelev1">&gt; +			    fi])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              # Get the alignment of the type
</span><br>
<span class="quotelev1">&gt;              if test &quot;$ofc_have_type&quot; = &quot;1&quot;; then
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
<li><strong>Next message:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
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
