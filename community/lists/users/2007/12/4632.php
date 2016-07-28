<?
$subject_val = "[OMPI users] Re :Re:  what is MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 06:15:35 2007" -->
<!-- isoreceived="20071211111535" -->
<!-- sent="11 Dec 2007 11:13:24 -0000" -->
<!-- isosent="20071211111324" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re:  what is MPI_IN_PLACE" -->
<!-- id="1197371363.S.7968.2005.webmail80.rediffmail.com.1197371604.27542_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Re :Re:  what is MPI_IN_PLACE<br>
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 06:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks&amp;nbsp; George,&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; But what is the need for user to specify it. The api can check the address of&amp;nbsp; input buffers and output buffers. Is there some extra advantage of MPI_IN_PLACE over automatically detecting it using pointers?-NeerajOn Tue, 11 Dec 2007 06:10:06 -0500 Open MPI Users  wrote  Neeraj,    MPI_IN_PLACE is defined by the MPI standard in order to allow the    users to specify that the input and output buffers for the collectives    are the same. Moreover, not all collectives support MPI_IN_PLACE and    for those that support it some strict rules apply. Please read the    collective section in the MPI standard to see all the restrictions.       Thanks,       george.    On Dec 11, 2007, at 5:56 AM, Neeraj Chourasia wrote:    &amp;gt; Hello everyone,  &amp;gt;  &amp;gt;     While going through collective algorithms, I came across    &amp;gt; preprocessor directive MPI_IN_PLACE which is (void *)1. Its always    &amp;gt; being compared against source buffer(sbuf). My question is when    &amp;gt; MP<br>
I_IN_PLACE == sbuf condition would be true. As far as i    &amp;gt; understand, sbuf is the address of source buffer, which every node    &amp;gt; has to transfer to remaining nodes based on recursive doubling or    &amp;gt; say bruck algo. And it can never be equal to (void *)1. Any help is    &amp;gt; appreciated.  &amp;gt;  &amp;gt; Regards  &amp;gt; Neeraj  &amp;gt;  &amp;gt; _______________________________________________  &amp;gt; users mailing list  &amp;gt; users_at_[hidden]  &amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>      
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="4633.php">George Bosilca: "Re: [OMPI users] Re :Re:  what is MPI_IN_PLACE"</a>
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
