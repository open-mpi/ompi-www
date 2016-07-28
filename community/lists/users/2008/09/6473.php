<?
$subject_val = "Re: [OMPI users] Warnings in Ubuntu Hardy";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 21:41:32 2008" -->
<!-- isoreceived="20080907014132" -->
<!-- sent="Sat, 6 Sep 2008 22:41:27 -0300" -->
<!-- isosent="20080907014127" -->
<!-- name="Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;)" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warnings in Ubuntu Hardy" -->
<!-- id="dd4eed670809061841p6f165b4ara8014412b58c52d8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="18627.12197.85659.480045_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warnings in Ubuntu Hardy<br>
<strong>From:</strong> Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;) (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-06 21:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks !
<br>
<p>On Sat, Sep 6, 2008 at 10:34 PM, Dirk Eddelbuettel &lt;edd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6 September 2008 at 22:13, Davi Vercillo C. Garcia (    ) wrote:
</span><br>
<span class="quotelev1">&gt; | I'm trying to execute some programs in my notebook (Ubuntu 8.04) using
</span><br>
<span class="quotelev1">&gt; | OpenMPI, and I always get a warning message like:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; | --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; | [0,0,0]: OpenIB on host juliana was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; | Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; | lower performance.
</span><br>
<span class="quotelev1">&gt; | --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | What is this ?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Uncomment this in /etc/openmpi/openmpi-mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Disable the use of InfiniBand
</span><br>
<span class="quotelev1">&gt;  btl = ^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is the default in newer packages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Davi Vercillo Carneiro Garcia
<a href="http://davivercillo.blogspot.com/">http://davivercillo.blogspot.com/</a>
Universidade Federal do Rio de Janeiro
Departamento de Ci&#195;&#170;ncia da Computa&#195;&#167;&#195;&#163;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
Grupo de Usu&#195;&#161;rios GNU/Linux da UFRJ (GUL-UFRJ)
<a href="http://groups.google.com/group/gul-ufrj">http://groups.google.com/group/gul-ufrj</a>
Linux User: #388711
<a href="http://counter.li.org/">http://counter.li.org/</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6474.php">Paul Kapinos: "[OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6472.php">Dirk Eddelbuettel: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
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
