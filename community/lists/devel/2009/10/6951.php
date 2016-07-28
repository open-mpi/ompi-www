<?
$subject_val = "Re: [OMPI devel] binding with MCA parameters: broken or user error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 21:28:53 2009" -->
<!-- isoreceived="20091010012853" -->
<!-- sent="Fri, 9 Oct 2009 19:28:53 -0600" -->
<!-- isosent="20091010012853" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding with MCA parameters: broken or user error?" -->
<!-- id="69846BD0-F6E0-44B4-B6EF-D48F62C439C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ACEC75C.1020606_at_sun.com" -->
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
<strong>Date:</strong> 2009-10-09 21:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6950.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6949.php">Eugene Loh: "[OMPI devel] binding with MCA parameters:  broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding -display-devel-map to your cmd line so you can see what  
<br>
OMPI thinks the binding and mapping policy is set to - that'll tell  
<br>
you if the problem is in the mapping or in the daemon binding.
<br>
<p>Also, it might help to know something about this node - like how many  
<br>
sockets, cores/socket.
<br>
<p>On Oct 8, 2009, at 11:17 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Here are two problems with openmpi-1.3.4a1r22051
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Here, I try to run the moral equivalent of -bysocket -bind-to- 
</span><br>
<span class="quotelev1">&gt; socket,
</span><br>
<span class="quotelev1">&gt; # using the MCA parameter form specified on the mpirun command line.
</span><br>
<span class="quotelev1">&gt; # No binding results.  THIS IS PROBLEM 1.
</span><br>
<span class="quotelev1">&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy socket --mca  
</span><br>
<span class="quotelev1">&gt; orte_process_binding socket -report-bindings hostname
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Same thing with the &quot;core&quot; form.
</span><br>
<span class="quotelev1">&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy core --mca  
</span><br>
<span class="quotelev1">&gt; orte_process_binding core -report-bindings hostname
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Now, I set the MCA parameters as environment variables.
</span><br>
<span class="quotelev1">&gt; # I then check the spellings and confirm all is set using ompi_info.
</span><br>
<span class="quotelev1">&gt; % setenv OMPI_MCA_rmaps_base_schedule_policy socket
</span><br>
<span class="quotelev1">&gt; % setenv OMPI_MCA_orte_process_binding socket
</span><br>
<span class="quotelev1">&gt; % ompi_info -a | grep rmaps_base_schedule_policy
</span><br>
<span class="quotelev1">&gt;              MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;socket&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; environment)
</span><br>
<span class="quotelev1">&gt; % ompi_info -a | grep orte_process_binding
</span><br>
<span class="quotelev1">&gt;               MCA orte: parameter &quot;orte_process_binding&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;socket&quot;, data source: environment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # So, now I run a simple program.
</span><br>
<span class="quotelev1">&gt; # I get binding now, but I'm filling up the first socket before  
</span><br>
<span class="quotelev1">&gt; going to the second.
</span><br>
<span class="quotelev1">&gt; # THIS IS PROBLEM 2.
</span><br>
<span class="quotelev1">&gt; % mpirun -np 5 -report-bindings hostname
</span><br>
<span class="quotelev1">&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29741,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29741,1],1] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29741,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29741,1],3] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29741,1],4] to socket 1 cpus 00f0
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Adding -bysocket to the command line fixes things.
</span><br>
<span class="quotelev1">&gt; % mpirun -np 5 -bysocket -report-bindings hostname
</span><br>
<span class="quotelev1">&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29751,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29751,1],1] to socket 1 cpus 00f0
</span><br>
<span class="quotelev1">&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29751,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29751,1],3] to socket 1 cpus 00f0
</span><br>
<span class="quotelev1">&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child  
</span><br>
<span class="quotelev1">&gt; [[29751,1],4] to socket 0 cpus 000f
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt; saem9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bug?  Or am I doing something wrong?
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
<li><strong>Next message:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Previous message:</strong> <a href="6950.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>In reply to:</strong> <a href="6949.php">Eugene Loh: "[OMPI devel] binding with MCA parameters:  broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6952.php">Eugene Loh: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6954.php">Terry Dontje: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
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
