<?
$subject_val = "Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 13:06:49 2009" -->
<!-- isoreceived="20090811170649" -->
<!-- sent="Tue, 11 Aug 2009 10:07:29 -0700" -->
<!-- isosent="20090811170729" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open" -->
<!-- id="4A81A551.4090005_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800908110929s56ba85b1xcbb66bbf88a46b0e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error: system limit exceeded on number of pipes that	can be open<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 13:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>In reply to:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Reply:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
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
Mike Dubman wrote:
<blockquote
 cite="midb20b52800908110929s56ba85b1xcbb66bbf88a46b0e@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div class="gmail_quote">
  <div dir="ltr"><br>
Hello guys,<br>
  <br>
  <br>
When executing following command with mtt and ompi 1.3.3:<br>
  <br>
mpirun&nbsp;--host&nbsp;witch15,witch15,witch15,witch15,witch16,witch16,witch16,witch16,witch17,witch17,witch17,witch17,witch18,witch18,witch18,witch18,witch19,witch19,witch19,witch19&nbsp;-np&nbsp;20&nbsp;&nbsp;&nbsp;--mca&nbsp;btl_openib_use_srq&nbsp;1&nbsp;&nbsp;--mca&nbsp;btl&nbsp;self,sm,openib&nbsp;
~mtt/mtt-scratch/20090809140816_dellix8_11812/installs/mnum/tests/ibm/ibm/dynamic/loop_spawn
  <br>
  <br>
getting following errors:<br>
  <br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#0&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#20&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#40&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#60&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#80&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#100&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#120&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#140&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#160&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#180&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#200&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#220&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#240&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#260&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#280&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#300&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#320&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#340&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#360&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#380&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#400&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#420&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#440&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#460&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#480&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#500&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#520&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#540&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#560&nbsp;return&nbsp;:&nbsp;0<br>
parent:&nbsp;MPI_Comm_spawn&nbsp;#580&nbsp;return&nbsp;:&nbsp;0<br>
--------------------------------------------------------------------------<br>
mpirun&nbsp;was&nbsp;unable&nbsp;to&nbsp;launch&nbsp;the&nbsp;specified&nbsp;application&nbsp;as&nbsp;it&nbsp;encountered&nbsp;an&nbsp;error:<br>
  <br>
  <span style="color: rgb(255, 0, 0);">Error:&nbsp;system&nbsp;limit&nbsp;exceeded&nbsp;on&nbsp;number&nbsp;of&nbsp;pipes&nbsp;that&nbsp;can&nbsp;be&nbsp;open</span><br>
Node:&nbsp;witch19<br>
  <br>
when&nbsp;attempting&nbsp;to&nbsp;start&nbsp;process&nbsp;rank&nbsp;0.<br>
  <br>
This&nbsp;can&nbsp;be&nbsp;resolved&nbsp;by&nbsp;setting&nbsp;the&nbsp;mca&nbsp;parameter&nbsp;opal_set_max_sys_limits&nbsp;to&nbsp;1,<br>
increasing&nbsp;your&nbsp;limit&nbsp;descriptor&nbsp;setting&nbsp;(using&nbsp;limit&nbsp;or&nbsp;ulimit&nbsp;commands),<br>
asking&nbsp;the&nbsp;system&nbsp;administrator&nbsp;for&nbsp;that&nbsp;node&nbsp;to&nbsp;increase&nbsp;the&nbsp;system&nbsp;limit,&nbsp;or&nbsp;<br>
by&nbsp;rearranging&nbsp;your&nbsp;processes&nbsp;to&nbsp;place&nbsp;fewer&nbsp;of&nbsp;them&nbsp;on&nbsp;that&nbsp;node.<br>
  <br>
  <br>
Do you know what OS params should be changed in order to resolve it?<br>
  </div>
  </div>
  </div>
</blockquote>
I thought this error message just got a makeover.&nbsp; So, if it's
insufficient, it should probably be improved further.&nbsp; The message
suggests:<br>
<br>
1) setting opal_set_max_sys_limits to 1, which seems pretty self
explanatory<br>
<br>
2) increasing descriptor limit using limit or ulimit, which requires a
little more OS familiarity<br>
<br>
3) cutting a deal with sysadmin<br>
<br>
4) rearranging processes<br>
<br>
So, which part are you asking about?&nbsp; #2?&nbsp; If so, try "man limit" and
look at the places where you see anything about "descriptor[s]".&nbsp;
Answers depend on the shell you use.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>In reply to:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Reply:</strong> <a href="6617.php">Mike Dubman: "Re: [OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
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
