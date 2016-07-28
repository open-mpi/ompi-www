<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 14:02:31 2009" -->
<!-- isoreceived="20090623180231" -->
<!-- sent="Tue, 23 Jun 2009 11:02:34 -0700" -->
<!-- isosent="20090623180234" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="4A4118BA.106_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 14:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6313.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6311.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Ralph Castain wrote:
<blockquote cite="mid7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7@open-mpi.org"
 type="cite">Had a chance to think about how this might be done, and
looked at it for awhile after getting home. I -think- I found a way to
do it</blockquote>
Okay, terrific.&nbsp; Here is my high-level point of view:<br>
<br>
*) From a usability point of view, I think having to specify both
rankfile and hostfile is awkward.&nbsp; From a user's point of view, saying
"bind this process to that core, this one to that, etc." is complete
information.&nbsp; It's eyebrowing raising to have to specify a subset of
this information redundantly in a different file.<br>
<br>
*) Plus, the error message one gets when one uses only a rankfile is
rather confusing.<br>
<br>
*) But fixing all this within the current OMPI framework can be
difficult and therefore might have a lower priority than other pressing
issues.<br>
<br>
*) Plus, even if we were to start from scratch, the "big picture" about
how we want to approach all this remains fuzzy (to me).&nbsp; If all users
wanted the same thing, we could provide that.&nbsp; Realistically, users
will want millions of variations of somewhat related functionality.<br>
<br>
So, I'll settle for an improved failure mode:&nbsp; a better error message
for the user who specifies rankfile without independent allocation
information.&nbsp; Whatever you can do to accommodate such a user better
would be icing on the cake.<br>
<blockquote cite="mid7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7@open-mpi.org"
 type="cite">but there are a couple of caveats:
  <div><br>
  </div>
  <div>1. Len's point about oversubscribing without warning would
definitely hold true - this would positively be a "user beware" option</div>
</blockquote>
I'm okay with that.&nbsp; A rankfile gives rather specific information.&nbsp;
Give them what they ask for!&nbsp; Having to maintain information in
multiple places is hardly an elegant safeguard.<br>
<blockquote cite="mid7B36E82E-C666-4D64-8FF7-4AE0F0FB88F7@open-mpi.org"
 type="cite">
  <div>
  <blockquote type="cite">
    <div dir="ltr">
    <div class="gmail_quote">
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
      <div>
      <div class="h5">
      <div>
      <div class="gmail_quote">
      <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
        <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
          <div> On Fri, Jun 19, 2009 at 2:21 PM, Eugene Loh &lt;<a
 href="mailto:Eugene.Loh@sun.com" target="_blank">Eugene.Loh@sun.com</a>
&lt;mailto:<a href="mailto:Eugene.Loh@sun.com" target="_blank">Eugene.Loh@sun.com</a>&gt;&gt;
wrote:<br>
          <br>
&nbsp; &nbsp;% cat rankfile<br>
&nbsp; &nbsp;rank 0=node0 slot=0<br>
&nbsp; &nbsp;rank 1=node1 slot=0<br>
&nbsp; &nbsp;% mpirun -np 2 -rf rankfile ./a.out<br>
&nbsp;
&nbsp;--------------------------------------------------------------------------<br>
&nbsp; &nbsp;Rankfile claimed host node1 that was not allocated or<br>
&nbsp; &nbsp;oversubscribed it's slots:<br>
          <br>
&nbsp;
&nbsp;--------------------------------------------------------------------------<br>
&nbsp; &nbsp;[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file<br>
&nbsp; &nbsp;rmaps_rank_file.c at line 107<br>
&nbsp; &nbsp;[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file<br>
&nbsp; &nbsp;base/rmaps_base_map_job.c at line 86<br>
&nbsp; &nbsp;[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file<br>
&nbsp; &nbsp;base/plm_base_launch_support.c at line 86<br>
&nbsp; &nbsp;[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file<br>
&nbsp; &nbsp;plm_rsh_module.c at line 1016<br>
&nbsp; &nbsp;% mpirun -np 2 -host node0,node1 -rf rankfile ./a.out<br>
&nbsp; &nbsp;0 on node0<br>
&nbsp; &nbsp;1 on node1<br>
&nbsp; &nbsp;done<br>
          </div>
        </blockquote>
      </blockquote>
      </div>
      </div>
      </div>
      </div>
    </blockquote>
    </div>
    </div>
  </blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6313.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6311.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6295.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
