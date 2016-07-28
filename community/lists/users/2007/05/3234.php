<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 10:11:37 2007" -->
<!-- isoreceived="20070510141137" -->
<!-- sent="Thu, 10 May 2007 09:11:18 -0500" -->
<!-- isosent="20070510141118" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4" -->
<!-- id="200705100911.19007.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4642D06A.70305_at_idris.fr" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 10:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>In reply to:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Laurent,
<br>
<p>Unfortunately, as far as I know, none of the current Open MPI developers has 
<br>
access to a system with POE, so the POE process launcher has fallen into 
<br>
disrepair. Attached is a patch that should allow you to compile (however, you 
<br>
may also need to add #include &lt;signal.h&gt; to pls_poe_module.c). 
<br>
<p>Though this should allow the compile to succeed, launching with POE may not 
<br>
work (it has not been tested for quite a while). If it doesn't work, you 
<br>
should use the rsh launcher instead (pass -mca pls rsh on the command line, 
<br>
or set the parameter using one of the methods here: 
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>). 
<br>
<p>Sorry about this. We have an IBM machine at my institution which I am told 
<br>
will have POE on it 'soon', but I am not sure when. Once it does, we will be 
<br>
working on getting POE well supported again.
<br>
<p>I should mention that we do use LoadLeveler on one of our machines and Open 
<br>
MPI seems to work with it quite well. I would be interested in hearing how it 
<br>
works for you.
<br>
<p>Hope this helps, let me know if this works.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Thursday 10 May 2007 02:57 am, Laurent Nguyen wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to install OpenMPI 1.2 but I saw there some problems when
</span><br>
<span class="quotelev1">&gt; compiling files with POE. When OpenMPI 1.2.1 was released, I saw in the
</span><br>
<span class="quotelev1">&gt; bug fixes that this problem was fixed. Then I tried, but it still
</span><br>
<span class="quotelev1">&gt; doesn't work. The problem comes from orte/mca/pls/poe/pls_poe_module.c.
</span><br>
<span class="quotelev1">&gt; A static function &quot;static int pls_poe_cancel_operation(void);&quot; is
</span><br>
<span class="quotelev1">&gt; declared but not defined in the files. I don't know if my configuration
</span><br>
<span class="quotelev1">&gt; make it bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, if someone achieved to install OpenMPI 1.2.1 on IBM, I would like to
</span><br>
<span class="quotelev1">&gt; have some advices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I attached some output files of my installation
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3234/poe.patch">poe.patch</a>
</ul>
<!-- attachment="poe.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>In reply to:</strong> <a href="3232.php">Laurent Nguyen: "[OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Reply:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
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
