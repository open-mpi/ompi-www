<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 15:44:56 2012" -->
<!-- isoreceived="20120319194456" -->
<!-- sent="Mon, 19 Mar 2012 15:44:38 -0400" -->
<!-- isosent="20120319194438" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="C4427A58-B943-4396-9D1A-4305296931E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F678A74.90303_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Replacing poll()<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 15:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10743.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc5 is released"</a>
<li><strong>Previous message:</strong> <a href="10741.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10741.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2012, at 3:35 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I've removed put and get from mosix (feels good to cut down on code lines...), but now the question has to be asked:
</span><br>
<span class="quotelev1">&gt; Threre are send and sendi (is sendi sufficient, or must i include send as well?)
</span><br>
<p>send is sufficient.  sendi is an optimization.  You can always implement it later, after you get base functionality working.
<br>
<p><span class="quotelev1">&gt; for the outgoing, but what about the incoming?
</span><br>
<span class="quotelev1">&gt; How does a process request input? Do I poll for incoming messages in the progress function and call the function in mca_btl_base_active_message_trigger[incoming_tag] ?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Also, If I remove the async operations and left only with the blocking ones - can I remove the prepare_src/prepare_dst functions (and any other mention of the descriptors data structure) for the time being?
</span><br>
<p>Here's notes I have from a conversation I had with George when I was preparing a custom BTL for an Sc'11 demo:
<br>
<p>/*                                                                                  
<br>
&nbsp;* Notes from george:                                                                
<br>
&nbsp;*                                                                                  
<br>
&nbsp;* - BTL ALLOC: allocating PML control messages or eager frags if BTL                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;does not have IN_PLACE flag.  To be clear: max it will ever alloc              
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is eager_limit.  THEREFORE: eager_limit is the max that ALLOC                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;must always be able to alloc.                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Contraction in the btl.h documentation.                                    
<br>
&nbsp;*                                                                                  
<br>
&nbsp;* - BTL PREPARE SRC: max_send_size frags go through here.  Can return              
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a smaller size than was asked for.                                              
<br>
&nbsp;*                                                                                  
<br>
&nbsp;* - BTL PREPARE DEST: not used if you don't have PUT/GET                            
<br>
*                                                                                  
<br>
&nbsp;* - BTL SEND: will be used after ALLOC / PREPARE                                    
<br>
&nbsp;*/
<br>
<p><span class="quotelev1">&gt; I assume it'll cost me in performance, but I want to create a basic working prototype first and proceed to supporting async calls later on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all your help,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Sorry about the lengthy thread... I promise I'll document my component so it can later be used for reference for the things I didn't understand reading the template, btl.h and the TCP component (any other devel manuals to read?).
</span><br>
<p><p>No worries; we're happy to answer questions.
<br>
<p>Any documentation you can provide would be awesome.  :-)  As you can see, we're a little short of real developer documentation.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10743.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc5 is released"</a>
<li><strong>Previous message:</strong> <a href="10741.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10741.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
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
