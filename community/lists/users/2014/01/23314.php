<?
$subject_val = "Re: [OMPI users] some problems with openmpi-1.9a1r30100";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 09:59:25 2014" -->
<!-- isoreceived="20140102145925" -->
<!-- sent="Thu, 2 Jan 2014 06:57:31 -0800" -->
<!-- isosent="20140102145731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some problems with openmpi-1.9a1r30100" -->
<!-- id="A50776C7-3BD2-4FAA-8A82-6150168193F7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5DE94D2C-F0F2-4A7D-8023-39FBD3D0B3A1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] some problems with openmpi-1.9a1r30100<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 09:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Previous message:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>In reply to:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I restored the -bycore option, but that isn't what you want here. Setting aside the behavior of the 1.6 series, which I believe is incorrect, when you tell us to map &quot;bycore&quot; we will map each process to one core. Thus, all four of your processes will be mapped onto linpc0 in your command line since there are 4 cores on that node.
<br>
<p>When you then tell us to bind 4 cpus/proc, this clearly results in an overload condition, which is what the warning is telling you.
<br>
<p>Given that you appear to only have 4 cores/node, binding won't do you any good - effectively, you are &quot;binding&quot; to the entire node, which is no-op. Still, if you want to exercise the software, you should be mapping &quot;bynode&quot; so that your command will provide 1 proc/node. You can then still ask for 4 cpus/proc without creating an overload.
<br>
<p>Ralph 
<br>
<p>On Jan 1, 2014, at 8:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -bycore should still be available for backward compatibility, so I'll check that one. I'll have to look to see what your binding pattern didn't work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4044">https://svn.open-mpi.org/trac/ompi/ticket/4044</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Option &quot;-bycore&quot; isn't available any longer. Is this intended?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.7.x_or_newer 111 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: Error: unknown option &quot;-bycore&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Type 'mpiexec --help' for usage.
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.7.x_or_newer 112 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.7.x_or_newer 112 mpiexec -report-bindings \
</span><br>
<span class="quotelev2">&gt;&gt;  -np 4 -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Bind to:         CORE
</span><br>
<span class="quotelev2">&gt;&gt;   Node:            linpc0
</span><br>
<span class="quotelev2">&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;   #cpus:          1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.7.x_or_newer 113 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It worked with Open MPI 1.6.x.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.6.x 105 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev2">&gt;&gt;  -host linpc0,linpc1,sunpc0,sunpc1 -cpus-per-proc 4 -bycore \
</span><br>
<span class="quotelev2">&gt;&gt;  -bind-to-core hostname
</span><br>
<span class="quotelev2">&gt;&gt; [linpc1:09465] MCW rank 1 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev2">&gt;&gt;  [B B][B B]
</span><br>
<span class="quotelev2">&gt;&gt; linpc1
</span><br>
<span class="quotelev2">&gt;&gt; [linpc0:01036] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev2">&gt;&gt;  [B B][B B]
</span><br>
<span class="quotelev2">&gt;&gt; linpc0
</span><br>
<span class="quotelev2">&gt;&gt; [sunpc0:03796] MCW rank 2 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev2">&gt;&gt;  [B B][B B]
</span><br>
<span class="quotelev2">&gt;&gt; sunpc0
</span><br>
<span class="quotelev2">&gt;&gt; [sunpc1:21335] MCW rank 3 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev2">&gt;&gt;  [B B][B B]
</span><br>
<span class="quotelev2">&gt;&gt; sunpc1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi_1.6.x 106 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you changed the syntax once more so that I can get the
</span><br>
<span class="quotelev2">&gt;&gt; expected bindings with different command line options or is it
</span><br>
<span class="quotelev2">&gt;&gt; a problem in Open MPI 1.9.x?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23315.php">MM: "[OMPI users] globally unique 64bit unsigned integer (homogenous)"</a>
<li><strong>Previous message:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>In reply to:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23305.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
