<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 14:19:22 2007" -->
<!-- isoreceived="20070502181922" -->
<!-- sent="Wed, 2 May 2007 11:18:52 -0700" -->
<!-- isosent="20070502181852" -->
<!-- name="Chudin, Eugene" -->
<!-- email="eugene_chudin_at_[hidden]" -->
<!-- subject="[OMPI users] Call to MPI_Init affects errno" -->
<!-- id="AB40462F69164849BF07D528E474B170014A48F5_at_ussemx1100.merck.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Chudin, Eugene (<em>eugene_chudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 14:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Reply:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Reply:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to experiment with openmpi and following trivial code
<br>
(although runs) affects value of errno
<br>
<p>#include &lt;cerrno&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int _procid, _np;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;errno=\t&quot; &lt;&lt; errno &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;errno=\t&quot; &lt;&lt; errno &lt;&lt; &quot;\tafter MPI_Init()\t&quot; &lt;&lt;
<br>
std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;_procid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;_np);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;errno msg=\t&quot; &lt;&lt; strerror(errno) &lt;&lt; &quot;\tprocessor=\t&quot;
<br>
&lt;&lt; _procid &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Compiled with 
<br>
mpiCC -Wall test.cpp -o test
<br>
<p>Produces following output when run just on single processor using 
<br>
mpirun -np 1 --prefix /toolbox/openmpi  ./test
<br>
errno=  0
<br>
errno=  2       after MPI_Init()
<br>
errno msg=      No such file or directory       processor=      0
<br>
<p>When run on two processors using 
<br>
mpirun -np 2 --prefix /toolbox/openmpi  ./test
<br>
errno=  0
<br>
errno=  0
<br>
errno=  11      after MPI_Init()
<br>
errno=  115     after MPI_Init()
<br>
errno msg=      Operation now in progress       processor=      0
<br>
errno msg=      Resource temporarily unavailable        processor=
<br>
1
<br>
<p>The output of ompi_info --all is attached
<br>
<p>&nbsp;&lt;&lt;ompi_info.txt&gt;&gt; 
<br>
<p><p><p>------------------------------------------------------------------------------
<br>
Notice:  This e-mail message, together with any attachments, contains
<br>
information of Merck &amp; Co., Inc. (One Merck Drive, Whitehouse Station,
<br>
New Jersey, USA 08889), and/or its affiliates (which may be known
<br>
outside the United States as Merck Frosst, Merck Sharp &amp; Dohme or MSD
<br>
and in Japan, as Banyu - direct contact information for affiliates is 
<br>
available at <a href="http://www.merck.com/contact/contacts.html">http://www.merck.com/contact/contacts.html</a>) that may be 
<br>
confidential, proprietary copyrighted and/or legally privileged. It is 
<br>
intended solely for the use of the individual or entity named on this 
<br>
message. If you are not the intended recipient, and have received this 
<br>
message in error, please notify us immediately by reply e-mail and then 
<br>
delete it from your system.
<br>
<p>------------------------------------------------------------------------------
<br>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3185/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Previous message:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Reply:</strong> <a href="3186.php">Brian Barrett: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
<li><strong>Reply:</strong> <a href="3187.php">Bert Wesarg: "Re: [OMPI users] Call to MPI_Init affects errno"</a>
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
