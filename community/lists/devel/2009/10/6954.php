<?
$subject_val = "Re: [OMPI devel] binding with MCA parameters: broken or user error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 06:37:41 2009" -->
<!-- isoreceived="20091012103741" -->
<!-- sent="Mon, 12 Oct 2009 06:36:25 -0400" -->
<!-- isosent="20091012103625" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding with MCA parameters: broken or user error?" -->
<!-- id="4AD306A9.7060202_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="69846BD0-F6E0-44B4-B6EF-D48F62C439C3_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 06:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6953.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 branch created"</a>
<li><strong>In reply to:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In regards to the &quot;-mca XXX&quot; option not overriding the file setting I 
<br>
thought I saw this working for v1.3.  However, I just retested this and 
<br>
I am seeing the same issue of the &quot;-mca&quot; option not affecting 
<br>
orte_process_binding or rmaps_base_schedule_policy.
<br>
<p>This seems to work under the trunk.  I wonder if the issue might be 
<br>
something we did in r22050 where we stopped calling orte_register_params 
<br>
twice?  Not sure exactly why that would have prevented the mca option 
<br>
setting taking place the first time. 
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Try adding -display-devel-map to your cmd line so you can see what 
</span><br>
<span class="quotelev1">&gt; OMPI thinks the binding and mapping policy is set to - that'll tell 
</span><br>
<span class="quotelev1">&gt; you if the problem is in the mapping or in the daemon binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, it might help to know something about this node - like how many 
</span><br>
<span class="quotelev1">&gt; sockets, cores/socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2009, at 11:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are two problems with openmpi-1.3.4a1r22051
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Here, I try to run the moral equivalent of -bysocket -bind-to-socket,
</span><br>
<span class="quotelev2">&gt;&gt; # using the MCA parameter form specified on the mpirun command line.
</span><br>
<span class="quotelev2">&gt;&gt; # No binding results.  THIS IS PROBLEM 1.
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy socket --mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_binding socket -report-bindings hostname
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Same thing with the &quot;core&quot; form.
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 5 --mca rmaps_base_schedule_policy core --mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_binding core -report-bindings hostname
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Now, I set the MCA parameters as environment variables.
</span><br>
<span class="quotelev2">&gt;&gt; # I then check the spellings and confirm all is set using ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; % setenv OMPI_MCA_rmaps_base_schedule_policy socket
</span><br>
<span class="quotelev2">&gt;&gt; % setenv OMPI_MCA_orte_process_binding socket
</span><br>
<span class="quotelev2">&gt;&gt; % ompi_info -a | grep rmaps_base_schedule_policy
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;socket&quot;, data source: environment)
</span><br>
<span class="quotelev2">&gt;&gt; % ompi_info -a | grep orte_process_binding
</span><br>
<span class="quotelev2">&gt;&gt;               MCA orte: parameter &quot;orte_process_binding&quot; (current 
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;socket&quot;, data source: environment)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # So, now I run a simple program.
</span><br>
<span class="quotelev2">&gt;&gt; # I get binding now, but I'm filling up the first socket before going 
</span><br>
<span class="quotelev2">&gt;&gt; to the second.
</span><br>
<span class="quotelev2">&gt;&gt; # THIS IS PROBLEM 2.
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 5 -report-bindings hostname
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29741,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29741,1],1] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29741,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29741,1],3] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23947] [[29741,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29741,1],4] to socket 1 cpus 00f0
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Adding -bysocket to the command line fixes things.
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 5 -bysocket -report-bindings hostname
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29751,1],0] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29751,1],1] to socket 1 cpus 00f0
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29751,1],2] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29751,1],3] to socket 1 cpus 00f0
</span><br>
<span class="quotelev2">&gt;&gt; [saem9:23953] [[29751,0],0] odls:default:fork binding child 
</span><br>
<span class="quotelev2">&gt;&gt; [[29751,1],4] to socket 0 cpus 000f
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt; saem9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bug?  Or am I doing something wrong?
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
<li><strong>Next message:</strong> <a href="6955.php">Lenny Verkhovsky: "[OMPI devel] segv in coll tuned"</a>
<li><strong>Previous message:</strong> <a href="6953.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 branch created"</a>
<li><strong>In reply to:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6959.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
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
