<?
$subject_val = "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 19:28:07 2016" -->
<!-- isoreceived="20160514232807" -->
<!-- sent="Sat, 14 May 2016 16:27:55 -0700" -->
<!-- isosent="20160514232755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slot problem on &amp;quot;SUSE Linux, Enterprise Server 12 (x86_64)&amp;quot;" -->
<!-- id="942B3518-315C-4456-8749-745E13F9707D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2d9c581c-8e45-0214-e08b-2492c2b38d45_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 19:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>In reply to:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On May 7, 2016, at 1:13 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
</span><br>
<span class="quotelev1">&gt; Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0. The
</span><br>
<span class="quotelev1">&gt; following programs don't run anymore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 112 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.2-176-g9d45e07
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt; loki hello_2 113 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; loki hello_2 114
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The above worked fine for me with:
<br>
<p>OPAL repo revision: v1.10.2-182-g52c7573
<br>
<p>You might try updating.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything worked as expected with openmpi-v1.10.0-178-gb80f802.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; loki hello_2 114 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
</span><br>
<span class="quotelev1">&gt;      OPAL repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /opt/solstudio12.4/bin/cc
</span><br>
<span class="quotelev1">&gt; loki hello_2 115 mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; Process 0 of 3 running on loki
</span><br>
<span class="quotelev1">&gt; Process 1 of 3 running on loki
</span><br>
<span class="quotelev1">&gt; Process 2 of 3 running on loki
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now 2 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings from task 2:
</span><br>
<span class="quotelev1">&gt;  message type:        3
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same problem with openmpi-v2.x-dev-1404-g74d8ea0, if I use
</span><br>
<span class="quotelev1">&gt; the following commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also the same problem with openmpi-dev-4010-g6c9d65c, if I use
</span><br>
<span class="quotelev1">&gt; the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,loki hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-dev-4010-g6c9d65c works as expected with the following commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki,nfs1 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 --host loki hello_2_mpi : -np 2 --host loki --slot-list 0:0-5,1:0-5 hello_2_slave_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has the interface changed so that I'm not allowed to use some of my
</span><br>
<span class="quotelev1">&gt; commands any longer? I would be grateful, if somebody can fix the
</span><br>
<span class="quotelev1">&gt; problem if it is a problem. Thank you very much for any help in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; &lt;hello_2_mpi.c&gt;&lt;hello_2_slave_mpi.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29126.php">http://www.open-mpi.org/community/lists/users/2016/05/29126.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29204.php">Andrew Reid: "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<li><strong>In reply to:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Reply:</strong> <a href="29206.php">Siegmar Gross: "Re: [OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
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
