<?
$subject_val = "[OMPI devel] binding with MCA parameters:  broken or user error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 01:16:14 2009" -->
<!-- isoreceived="20091009051614" -->
<!-- sent="Thu, 08 Oct 2009 22:17:16 -0700" -->
<!-- isosent="20091009051716" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] binding with MCA parameters:  broken or user error?" -->
<!-- id="4ACEC75C.1020606_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] binding with MCA parameters:  broken or user error?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-09 01:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6950.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are two problems with openmpi-1.3.4a1r22051
<br>
<p># Here, I try to run the moral equivalent of -bysocket -bind-to-socket,
<br>
# using the MCA parameter form specified on the mpirun command line.
<br>
# No binding results.  THIS IS PROBLEM 1.
<br>
% mpirun -np 5 --mca rmaps_base_schedule_policy socket --mca 
<br>
orte_process_binding socket -report-bindings hostname
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p># Same thing with the &quot;core&quot; form.
<br>
% mpirun -np 5 --mca rmaps_base_schedule_policy core --mca 
<br>
orte_process_binding core -report-bindings hostname
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p># Now, I set the MCA parameters as environment variables.
<br>
# I then check the spellings and confirm all is set using ompi_info.
<br>
% setenv OMPI_MCA_rmaps_base_schedule_policy socket
<br>
% setenv OMPI_MCA_orte_process_binding socket
<br>
% ompi_info -a | grep rmaps_base_schedule_policy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; 
<br>
(current value: &quot;socket&quot;, data source: environment)
<br>
% ompi_info -a | grep orte_process_binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_process_binding&quot; (current 
<br>
value: &quot;socket&quot;, data source: environment)
<br>
<p># So, now I run a simple program.
<br>
# I get binding now, but I'm filling up the first socket before going to 
<br>
the second.
<br>
# THIS IS PROBLEM 2.
<br>
% mpirun -np 5 -report-bindings hostname
<br>
[saem9:23947] [[29741,0],0] odls:default:fork binding child 
<br>
[[29741,1],0] to socket 0 cpus 000f
<br>
[saem9:23947] [[29741,0],0] odls:default:fork binding child 
<br>
[[29741,1],1] to socket 0 cpus 000f
<br>
[saem9:23947] [[29741,0],0] odls:default:fork binding child 
<br>
[[29741,1],2] to socket 0 cpus 000f
<br>
[saem9:23947] [[29741,0],0] odls:default:fork binding child 
<br>
[[29741,1],3] to socket 0 cpus 000f
<br>
[saem9:23947] [[29741,0],0] odls:default:fork binding child 
<br>
[[29741,1],4] to socket 1 cpus 00f0
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p># Adding -bysocket to the command line fixes things.
<br>
% mpirun -np 5 -bysocket -report-bindings hostname
<br>
[saem9:23953] [[29751,0],0] odls:default:fork binding child 
<br>
[[29751,1],0] to socket 0 cpus 000f
<br>
[saem9:23953] [[29751,0],0] odls:default:fork binding child 
<br>
[[29751,1],1] to socket 1 cpus 00f0
<br>
[saem9:23953] [[29751,0],0] odls:default:fork binding child 
<br>
[[29751,1],2] to socket 0 cpus 000f
<br>
[saem9:23953] [[29751,0],0] odls:default:fork binding child 
<br>
[[29751,1],3] to socket 1 cpus 00f0
<br>
[saem9:23953] [[29751,0],0] odls:default:fork binding child 
<br>
[[29751,1],4] to socket 0 cpus 000f
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
saem9
<br>
<p>Bug?  Or am I doing something wrong?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6950.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6948.php">Don Kerr: "Re: [OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<li><strong>Reply:</strong> <a href="6951.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
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
