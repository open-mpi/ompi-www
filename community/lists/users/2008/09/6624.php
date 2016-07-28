<?
$subject_val = "Re: [OMPI users] Newbie doubt.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 17:22:01 2008" -->
<!-- isoreceived="20080919212201" -->
<!-- sent="Fri, 19 Sep 2008 17:21:54 -0400" -->
<!-- isosent="20080919212154" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie doubt." -->
<!-- id="3BE4E967-F742-43F4-BD60-AA83BDFED417_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dd4eed670809191401q551e2c07o782b2e6ac8f487e8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie doubt.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 17:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6625.php">Shafagh Jafer: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6623.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6622.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you narrow down the problem a bit?  Have you run through a  
<br>
debugger, perchance, to see if anything turns up?  Is your code  
<br>
working (running to completion and producing correct answers) at low  
<br>
process counts, etc.?
<br>
<p><p>On Sep 19, 2008, at 5:01 PM, Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;)  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code evolved and I'm having more problems that I cannot solve. When
</span><br>
<span class="quotelev1">&gt; I execute it, using a hight number of processes, it crashes. And I'm
</span><br>
<span class="quotelev1">&gt; using MPI_Write but there's nothing in output file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code can be found at: <a href="http://pastebin.com/d1ea278f1">http://pastebin.com/d1ea278f1</a>
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
<li><strong>Next message:</strong> <a href="6625.php">Shafagh Jafer: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6623.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6622.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
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
