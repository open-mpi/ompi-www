<?
$subject_val = "Re: [OMPI users] Checksuming in openmpi 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 01:53:00 2010" -->
<!-- isoreceived="20100901055300" -->
<!-- sent="Wed, 1 Sep 2010 11:22:55 +0530" -->
<!-- isosent="20100901055255" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checksuming in openmpi 1.4.1" -->
<!-- id="AANLkTinqbAc+Mr8n+kxEe2GM7EanyZJqyuaf1X3b6o3H_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.00.1008310951330.11506_at_lxplus219.cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checksuming in openmpi 1.4.1<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 01:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14146.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14144.php">mohamed makhyoun: "[OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilbert,
<br>
Checksums are turned off by default. If you need checksums to be activated
<br>
add &quot;-mca pml csum&quot; to the mpirun command line.
<br>
Checksums are enabled only for inter-node communication. Intra-node
<br>
communication is typically over shared memory and hence checksum is disabled
<br>
for this case.
<br>
If you have built a debug version of Open MPI (--enable-debug), you can see
<br>
the checksum output by appending &quot;-mca pml_base_verbose 5&quot; to your command
<br>
line.
<br>
If you are interested in the relevant code it is located here -
<br>
ompi/mca/pml/csum
<br>
<p>--Nysal
<br>
<p>On Tue, Aug 31, 2010 at 1:22 PM, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand how to trigger CHECKSUM use
</span><br>
<span class="quotelev2">&gt;&gt; inside of OpenMPI 1.4.1 (after digging in the FAQs, I got not
</span><br>
<span class="quotelev2">&gt;&gt; explanations, sorry):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Is checksuming activated by default and embedded automatically
</span><br>
<span class="quotelev2">&gt;&gt; within the Send/Recv pair mechanism, please ?
</span><br>
<span class="quotelev2">&gt;&gt; - If not, which MCA param(S) should I set to activate it ?
</span><br>
<span class="quotelev2">&gt;&gt; - Is there a time penalty for using it, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Regards, Gilbert.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;  Facult??des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt;  ---------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14146.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14144.php">mohamed makhyoun: "[OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
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
