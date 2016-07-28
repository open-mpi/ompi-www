<?
$subject_val = "[OMPI users] arch question: long running app";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 13:15:47 2007" -->
<!-- isoreceived="20071204181547" -->
<!-- sent="Tue, 4 Dec 2007 18:15:42 +0000" -->
<!-- isosent="20071204181542" -->
<!-- name="doktora v" -->
<!-- email="doktora_at_[hidden]" -->
<!-- subject="[OMPI users] arch question: long running app" -->
<!-- id="3398909b0712041015r388957e6j1e5fb43e3ebaf1b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] arch question: long running app<br>
<strong>From:</strong> doktora v (<em>doktora_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 13:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4587.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<li><strong>Reply:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, although I did my due diligence on searching for this question,
<br>
I apologise if this is a repeat.
<br>
<span class="quotelev1">&gt;From an architectural point of view does it make sense to use MPI in the
</span><br>
following scenario (for the purposes of resilience as much as
<br>
parallelization):
<br>
<p>Each process is a long-running process (runs non-interrupted for weeks,
<br>
months or even years) that collects and crunches some streaming data, for
<br>
example temperature readings, and the data is replicated to R nodes.
<br>
<p>Because this is a diversion from the normal modus operandi (i.e. all data is
<br>
immediately available), is there any obvious MPI issues that I am not
<br>
considering in designing such an application?
<br>
<p>Here is a more detailed description of the app:
<br>
<p>A master receives the data and dispatches it according to some function such
<br>
that each tuple is replicated R times to R of the N nodes (with R&lt;=N).
<br>
Suppose that there are K regions from which temperature readings stream in
<br>
&nbsp;in the form of &lt;K,T&gt; where K is the region id and T is the temperature
<br>
reading. The master sends &lt;K,T&gt; to R of the N nodes. These nodes maintain a
<br>
long-term state of, say, the min/max readings. If R=N=2, the system is
<br>
basically duplicated and if one of the two nodes dies inadvertently, the
<br>
other one still has accounted for all the data.
<br>
<p>Here is some pseudo-code:
<br>
<p>int main(argc, argv)
<br>
<p>int N=10, R=3, K=200;
<br>
<p><p>Init(argc,argv);
<br>
<p>int rank=COMM_WORLD.Get_rank();
<br>
if(rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int lastnode = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(read &lt;k,T&gt; from socket)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i in 0:R) COMM_WORLD.Send(&lt;k,T&gt;,1,tuple,++lastnode%N,tag);
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_WORLD.Recv(&lt;k,T&gt;,1,tuple,any,tag,Info);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process_message(&lt;k,T&gt;);
<br>
}
<br>
<p>Many thanks for your time!
<br>
Regards
<br>
Dok
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4589.php">de Almeida, Valmor F.: "Re: [OMPI users] Segmentation fault: intel 10.1.008	compilers	w/openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4587.php">&#197;ke Sandgren: "Re: [OMPI users] Segmentation fault: intel 10.1.008 compilers	w/	openmpi-1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
<li><strong>Reply:</strong> <a href="4606.php">Jeff Squyres: "Re: [OMPI users] arch question: long running app"</a>
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
