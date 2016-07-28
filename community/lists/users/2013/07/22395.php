<?
$subject_val = "[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 26 03:16:15 2013" -->
<!-- isoreceived="20130726071615" -->
<!-- sent="Fri, 26 Jul 2013 09:15:40 +0200" -->
<!-- isosent="20130726071540" -->
<!-- name="Dusan Zoric" -->
<!-- email="dusan.zoric_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network" -->
<!-- id="CACndTaeH7QWvGET8rTWRK1DMtyCUU3MLKeFRLCRdoEMdH_3jgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network<br>
<strong>From:</strong> Dusan Zoric (<em>dusan.zoric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-26 03:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
<li><strong>Previous message:</strong> <a href="22394.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>Reply:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running application that performs some transformations of large
<br>
matrices on 7-node cluster. Nodes are connected via QDR 40 Gbit Infiniband.
<br>
Open MPI 1.4.3 is installed on the system.
<br>
<p>Given matrix transformation requires large data exchange between nodes in
<br>
such a way that at each algorithm step there is one node that sends data
<br>
and all others receive. Number of processes is equal to number of nodes
<br>
used. I have to say that I am relatively new at MPI, but it seemed that
<br>
ideal way of performing this is by using MPI_Bcast.
<br>
<p>Everything worked fine for some not so large matrices. However, when matrix
<br>
size increases, at some point application hangs and stays there forever.
<br>
<p>I am not completely sure, but it seems like there is no errors in my code.
<br>
I traced it in detail in order to check if there are some uncompleted
<br>
collective operations before that specific call of MPI_Bcast, but
<br>
everything looks fine. Also, for that specific call, root is correctly set
<br>
in all processes, as well as message type and size, and, of course,
<br>
MPI_Bcast is called in all processes.
<br>
<p>I also ran a lot of scenarios (running application on matrices of different
<br>
sizes and changing the number of processes) in order to figure out when
<br>
this happens. What can be observed is the following:
<br>
<p>&nbsp;&nbsp;&nbsp;- for the matrix of the same size, application successfully finishes if
<br>
&nbsp;&nbsp;&nbsp;I decrees number of processes
<br>
&nbsp;&nbsp;&nbsp;- however, for given number of processes application will hang for some
<br>
&nbsp;&nbsp;&nbsp;slightly larger matrix
<br>
&nbsp;&nbsp;&nbsp;- for the given matrix size and number of processes where I have program
<br>
&nbsp;&nbsp;&nbsp;hanging, if I reduce the size of the message in each MPI_Bcat call twice
<br>
&nbsp;&nbsp;&nbsp;(of course the result will not be correct), there will not be hanging
<br>
<p>So, it seems to me that problem could be in some buffers that MPI uses, and
<br>
maybe some default MCA parameter should be changed, but, as I said, I do
<br>
not have a lot of experience in MPI programming, and I have not found
<br>
solution for this problem. So, the question is whether anyone has had a
<br>
similar problem, and maybe knows if this could be solved by setting
<br>
appropriate MCA parameter, or knows any other solution or explanation?
<br>
<p>Thanks,
<br>
Dusan Zoric
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22395/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
<li><strong>Previous message:</strong> <a href="22394.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>Reply:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
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
