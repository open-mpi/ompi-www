<?
$subject_val = "[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 08:55:57 2009" -->
<!-- isoreceived="20091210135557" -->
<!-- sent="Thu, 10 Dec 2009 08:55:39 -0500" -->
<!-- isosent="20091210135539" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5" -->
<!-- id="200912100855.39105.keller_at_ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 08:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<li><strong>Previous message:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Reply:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
Indiana University has created more SVN goodness for us: CMRs can be created 
<br>
and/or amended via magic strings in SVN commit messages.
<br>
<p>This will help save a lot of time by:
<br>
&nbsp;1.) not manually having to create CMRs
<br>
&nbsp;2.) allow the original developer decide what is required
<br>
&nbsp;3.) not require the RMs to &quot;nag&quot; people, asking whether rXXX is worthwhile,
<br>
&nbsp;4.) etc....
<br>
<p>If You want to create a CMR to patch from the trunk to one of the branches, 
<br>
add the following text somewhere into your SVN commit message.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cmr:MILESTONE[:#CMR-TICKET]
<br>
<p>Valid MILESTONE values include &quot;v1.4&quot;, &quot;v1.4.1&quot;, ..., &quot;v1.5&quot;, &quot;v1.5.1&quot;, 
<br>
...etc. (note that there must be a corresponding Trac milestone).  For 
<br>
example, to close ticket #42 and create a CMR for v1.5:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;svn ci -m &quot;This fixes #42 and should cmr:v1.5 to the branch as well&quot;
<br>
<p>If you need to amend an existing CMR, use the &quot;:CMR-TICKET&quot; notation to 
<br>
specify which existing Trac ticket to amend.  For example (assuming the prior 
<br>
commit created a v1.5 CMR #4711):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;svn ci -m &quot;This really fixes #42, and should be added to cmr:v1.5#4711&quot;
<br>
<p>You can also create multiple CMRs from a single commit:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;svn ci -m &quot;Big Important fix.  Needs to go to both cmr:v1.4 and cmr:v1.5&quot;
<br>
<p>As you know the v1.5 series will be feature driven, therefore you may create a 
<br>
CMR for a feature to enter at a later milestone (e.g., v1.5.2) and later refer 
<br>
to the very same CMR to move over when it is ready to be included (as long as 
<br>
a corresponding Trac milestone exists for it).
<br>
<p>*PLEASE NOTE* If the cmr:-parsing script is unable to understand your SVN 
<br>
commit message (e.g., you get the syntax wrong, you specify a milestone that 
<br>
doesn't exist, you try to amend a ticket that is not a matching CMR, etc.), 
<br>
the commit will abort *WITHOUT WRITING TO THE SVN REPOSITORY* and show you a 
<br>
brief error message indicating what you did wrong.  You can just fix what you 
<br>
did wrong and then re-commit.
<br>
<p>With best regards,
<br>
Jeff and Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7215.php">Rainer Keller: "[OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<li><strong>Previous message:</strong> <a href="7213.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Reply:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
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
