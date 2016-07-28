<?
$subject_val = "Re: [OMPI devel] binding with MCA parameters: broken or user error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 10:59:03 2009" -->
<!-- isoreceived="20091012145903" -->
<!-- sent="Mon, 12 Oct 2009 08:58:52 -0600" -->
<!-- isosent="20091012145852" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding with MCA parameters: broken or user error?" -->
<!-- id="4C33994D-8C5C-4180-B1D1-449315F9780C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AD306A9.7060202_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] binding with MCA parameters: broken or user error?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 10:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6958.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed the process schedule issue on the trunk over the weekend (not  
<br>
moved to 1.3 yet while it &quot;soaked&quot;) - the binding issue was working  
<br>
fine on the trunk.
<br>
<p>I believe I applied the fix to stop calling register_params twice to  
<br>
1.3 already, but I can check.
<br>
<p>On Oct 12, 2009, at 4:36 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; In regards to the &quot;-mca XXX&quot; option not overriding the file setting  
</span><br>
<span class="quotelev1">&gt; I thought I saw this working for v1.3.  However, I just retested  
</span><br>
<span class="quotelev1">&gt; this and I am seeing the same issue of the &quot;-mca&quot; option not  
</span><br>
<span class="quotelev1">&gt; affecting orte_process_binding or rmaps_base_schedule_policy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to work under the trunk.  I wonder if the issue might be  
</span><br>
<span class="quotelev1">&gt; something we did in r22050 where we stopped calling  
</span><br>
<span class="quotelev1">&gt; orte_register_params twice?  Not sure exactly why that would have  
</span><br>
<span class="quotelev1">&gt; prevented the mca option setting taking place the first time.
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try adding -display-devel-map to your cmd line so you can see what  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI thinks the binding and mapping policy is set to - that'll tell  
</span><br>
<span class="quotelev2">&gt;&gt; you if the problem is in the mapping or in the daemon binding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, it might help to know something about this node - like how  
</span><br>
<span class="quotelev2">&gt;&gt; many sockets, cores/socket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2009, at 11:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are two problems with openmpi-1.3.4a1r22051
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Here, I try to run the moral equivalent of -bysocket -bind-to- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # using the MCA parameter form specified on the mpirun command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # No binding results.  THIS IS PROBLEM 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy socket --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_binding socket -report-bindings hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Same thing with the &quot;core&quot; form.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy core --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_process_binding core -report-bindings hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Now, I set the MCA parameters as environment variables.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # I then check the spellings and confirm all is set using ompi_info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % setenv OMPI_MCA_rmaps_base_schedule_policy socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % setenv OMPI_MCA_orte_process_binding socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info -a | grep rmaps_base_schedule_policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MCA rmaps: parameter  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;socket&quot;, data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source: environment)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ompi_info -a | grep orte_process_binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MCA orte: parameter &quot;orte_process_binding&quot; (current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value: &quot;socket&quot;, data source: environment)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # So, now I run a simple program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # I get binding now, but I'm filling up the first socket before  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going to the second.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # THIS IS PROBLEM 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 5 -report-bindings hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29741,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29741,1],1] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29741,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29741,1],3] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29741,1],4] to socket 1 cpus 00f0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Adding -bysocket to the command line fixes things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 5 -bysocket -report-bindings hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29751,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29751,1],1] to socket 1 cpus 00f0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29751,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29751,1],3] to socket 1 cpus 00f0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [[29751,1],4] to socket 0 cpus 000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saem9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bug?  Or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6958.php">Lenny Verkhovsky: "Re: [OMPI devel] segv in coll tuned"</a>
<li><strong>In reply to:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6960.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
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
