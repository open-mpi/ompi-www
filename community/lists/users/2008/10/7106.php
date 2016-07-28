<?
$subject_val = "Re: [OMPI users] ADIOI_GEN_DELETE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 17:50:02 2008" -->
<!-- isoreceived="20081027215002" -->
<!-- sent="Mon, 27 Oct 2008 17:49:56 -0400" -->
<!-- isosent="20081027214956" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ADIOI_GEN_DELETE" -->
<!-- id="2B009941-B8E6-4D03-8F81-6A4CEB0D9636_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dd4eed670810271427j3b30b96buc0dd8d76582d716b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ADIOI_GEN_DELETE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 17:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="7105.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7105.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Reply:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After a little digging, I am able to run your code (it looks like it  
<br>
expects both an input file and an output file on the command line, or  
<br>
it segv's).  But I don't get those errors, either with OMPI v1.2.8 or  
<br>
the upcoming v1.3 series; I ran with as many as 16 processes across 4  
<br>
nodes.
<br>
<p>Can you narrow the problem down a bit more?  You still didn't provide  
<br>
too many details about the problem. :-)
<br>
<p><p>On Oct 27, 2008, at 5:27 PM, Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;) wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 27, 2008 at 6:48 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I can't seem to run your code, either.  Can you provide a more  
</span><br>
<span class="quotelev2">&gt;&gt; precise
</span><br>
<span class="quotelev2">&gt;&gt; description of what exactly is happening?  It's quite possible /  
</span><br>
<span class="quotelev2">&gt;&gt; probable
</span><br>
<span class="quotelev2">&gt;&gt; that Rob's old post is the answer, but I can't tell from your  
</span><br>
<span class="quotelev2">&gt;&gt; original post
</span><br>
<span class="quotelev2">&gt;&gt; -- there just aren't enough details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute this code with more than once process (-n &gt; 1), this
</span><br>
<span class="quotelev1">&gt; error message appear. My code is a distributed compressor, that the
</span><br>
<span class="quotelev1">&gt; compress task is distributed. A single process reads a block from a
</span><br>
<span class="quotelev1">&gt; file, compress it and writes a compressed block to a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2008, at 3:26 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps this post in the Open-MPI archives can help:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/01/4898.php">http://www.open-mpi.org/community/lists/users/2008/01/4898.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already saw this post before, but this didn't help me. I'm not using
</span><br>
<span class="quotelev1">&gt; MPI_File_delete in my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev1">&gt; <a href="http://davivercillo.blogspot.com/">http://davivercillo.blogspot.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev1">&gt; Departamento de Ci&#195;&#170;ncia da Computa&#195;&#167;&#195;&#163;o
</span><br>
<span class="quotelev1">&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Grupo de Usu&#195;&#161;rios GNU/Linux da UFRJ (GUL-UFRJ)
</span><br>
<span class="quotelev1">&gt; <a href="http://www.dcc.ufrj.br/~gul">http://www.dcc.ufrj.br/~gul</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux User: #388711
</span><br>
<span class="quotelev1">&gt; <a href="http://counter.li.org/">http://counter.li.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Theory is when you know something, but it doesn't work. Practice is
</span><br>
<span class="quotelev1">&gt; when something works, but you don't know why.
</span><br>
<span class="quotelev1">&gt; Programmers combine theory and practice: Nothing works and they don't
</span><br>
<span class="quotelev1">&gt; know why.&quot; - Anon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7107.php">Jeff Squyres: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="7105.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>In reply to:</strong> <a href="7105.php">Davi Vercillo C. Garcia (&#227;&#131;&#128;&#227;&#131;&#180;&#227;&#130;&#163;): "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<li><strong>Reply:</strong> <a href="7108.php">Edgar Gabriel: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
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
