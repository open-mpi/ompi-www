<?
$subject_val = "[OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 13:37:49 2009" -->
<!-- isoreceived="20090302183749" -->
<!-- sent="Mon, 02 Mar 2009 10:37:08 -0800" -->
<!-- isosent="20090302183708" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AC2754.9080308_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] calling sendi earlier in the PML<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-02 13:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm on the verge of giving up moving the sendi call in the PML.  I will 
<br>
try one or two last things, including this e-mail asking for feedback.
<br>
<p>The idea is that when a BTL goes over a very low-latency interconnect 
<br>
(like sm), we really want to shave off whatever we can from the software 
<br>
stack.  One way of doing so is to use a &quot;send-immediate&quot; function, which 
<br>
a few BTLs (like sm) provide.  The problem is avoiding a bunch of 
<br>
overhead introduced by the PML before checking for a &quot;sendi()&quot; call.
<br>
<p>Currently, the PML does something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for ( btl = ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == btl-&gt;sendi() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == btl-&gt;send() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return ERROR;
<br>
<p>That is, it roundrobins over all available BTLs, for each one trying 
<br>
sendi() and then send().  If ever a sendi or send completes 
<br>
successfully, we exit the loop successfully.
<br>
<p>The problem is that this loop is buried several functioncalls deep in 
<br>
the PML.  Before it reaches this far, the PML has initialized a large 
<br>
&quot;send request&quot; data structure while traversing some (to me) complicated 
<br>
call graph of functions.  This introduces a lot of overhead that 
<br>
mitigates much of the speedup we might hope to see with the sendi 
<br>
function.  That overhead is unnecessary for a sendi call, but necessary 
<br>
for a send call.  I've tried reorganizing the code to defer as much of 
<br>
that work as possible -- performing that overhead only if it's need to 
<br>
perform a send call -- but I've gotten braincramp every time I've tried 
<br>
this reorganization.
<br>
<p>I think these are the options:
<br>
<p>Option A) Punt!
<br>
<p>Option B) Have someone more familiar with the PML make these changes.
<br>
<p>Option C) Have Eugene keep working at this because he'll learn more 
<br>
about the PML and it's good for his character.
<br>
<p>Option D) Go to a strategy in which all BTLs are tried for sendi before 
<br>
any of them is tried for a send.  The code would look like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for ( BTL = ... ) if ( SUCCESS == btl_sendi() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( BTL = ... ) if ( SUCCESS == btl_send() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return ERROR;
<br>
<p>The reason this is so much easier to achieve is that we can put that 
<br>
first loop way up high in the PML (as soon as a send enters the PML, 
<br>
avoiding all that expensive overhead) and leave the second loop several 
<br>
layers down, where it is today.  George is against this new loop 
<br>
structure because he thinks round robin selection of BTLs is most fair 
<br>
and distributes the load over BTLs as evenly as possible.  (In contrast, 
<br>
the proposed loop would favor BTLs with sendi functions.)  It seems to 
<br>
me, however, that favoring BTLs that have sendi functions is exactly the 
<br>
right thing to do!  I'm not even convinced that the conditions he's 
<br>
worried about are that common:  multiple eager BTLs to poll, one has a 
<br>
sendi, and that sendi is not very good or that BTL is getting overloaded.
<br>
<p>Anyhow, I like Option D, but George does not.
<br>
<p>Option E) Go to a strategy in which the next BTL is tested for a sendi 
<br>
function.  If there is one, use it.  If not, just continue with the 
<br>
usual heavyweight PML procedure.  This feels a little hackish to me, but 
<br>
it'll mean that most of the time that sendi can be called, the 
<br>
heavyweight PML overhead will be avoided, while at the same time &quot;fair&quot; 
<br>
roundrobin polling over the BTLs is maintained.
<br>
<p>I'll proceed with Option C for the time being.  If I don't announce 
<br>
success or surrender in the next few days, please write to me at the 
<br>
insane asylum.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5542.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5540.php">George Bosilca: "Re: [OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
