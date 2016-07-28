<?
$subject_val = "[OMPI users] Basic Scatter Operation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 19:11:09 2008" -->
<!-- isoreceived="20081210001109" -->
<!-- sent="Wed, 10 Dec 2008 00:11:05 +0000" -->
<!-- isosent="20081210001105" -->
<!-- name="Kevin Anthony Joy" -->
<!-- email="kjoy96_at_[hidden]" -->
<!-- subject="[OMPI users] Basic Scatter Operation" -->
<!-- id="BAY141-W1AEC27C57EC09CA4EAF7FD7FB0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Basic Scatter Operation<br>
<strong>From:</strong> Kevin Anthony Joy (<em>kjoy96_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-09 19:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Previous message:</strong> <a href="7482.php">Raymond Wan: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Reply:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Reply:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Maybe reply:</strong> <a href="7506.php">Kevin Anthony Joy: "Re: [OMPI users] Basic Scatter Operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good Evening All,
<br>
&nbsp;
<br>
I'm very new to using MPI; I seem to be struggling to get a basic understanding of the MPI::Comm_World.Scatter Operation, It seem's as though a may be misunderstanding how the scatter operation works. Suppose i have an Array of x amount of doubles, let's say 3 doubles that i want to spread across three processes. 
<br>
&nbsp;
<br>
I have -
<br>
&nbsp;
<br>
#include &lt;iostream&gt;#include &lt;mpi.h&gt;
<br>
int main(int argc, char* argv[]){    MPI_Init(&amp;argc, &amp;argv);    int rank, procs;    MPI_Comm_size(MPI_COMM_WORLD, &amp;procs);    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double stat[3] ;    stat[0] = 1.2;    stat[1] = 65.3;    stat[2] = 45.3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double test3[3];    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Scatter(        stat,        1,        MPI::DOUBLE,        &amp;test3,        1,        MPI::DOUBLE,        0);    }
<br>
&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; rank &lt;&lt;&quot; rec'd &quot; &lt;&lt; test3[0] &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();}
<br>
&nbsp;
<br>
Unfortunately, this doesn't output what i'd like. I'd like: Process 0 to output 1.2, process 1 to output 65.3 and process 2 to output 45.3 etc etc. I apologise if this question is very trivial.
<br>
&nbsp;
<br>
Regards,
<br>
&nbsp;
<br>
&nbsp;
<br>
_________________________________________________________________
<br>
Imagine a life without walls.&#160; See the possibilities. 
<br>
<a href="http://clk.atdmt.com/UKM/go/122465943/direct/01/">http://clk.atdmt.com/UKM/go/122465943/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Previous message:</strong> <a href="7482.php">Raymond Wan: "Re: [OMPI users] Only the root can run mpirun? other users how to do ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Reply:</strong> <a href="7484.php">Brock Palen: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Reply:</strong> <a href="7485.php">Matt Hughes: "Re: [OMPI users] Basic Scatter Operation"</a>
<li><strong>Maybe reply:</strong> <a href="7506.php">Kevin Anthony Joy: "Re: [OMPI users] Basic Scatter Operation"</a>
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
