<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 10:38:35 2006" -->
<!-- isoreceived="20061102153835" -->
<!-- sent="Wed, 01 Nov 2006 17:07:21 +0100" -->
<!-- isosent="20061101160721" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Collectives" -->
<!-- id="4548C639.5090008_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D27CA4A-4DF5-4DAA-A582-E33B85F0073A_at_cs.utk.edu" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-01 11:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Tony, <br>
<br>
What do mean by TCP ?&nbsp; Are you using an ethernet interconnect ?<br>
<br>
I have noticed a similar slowdown using LAM/MPI and&nbsp; MPI_Alltoall
primitive on our Solaris 10 cluster using gigabit ethernet and TCP. For
a large number of nodes I could ever come to a complete hangup. Part of
the problem lied in the ethernet network itself, and setting hardware
flow control on ethernet interfaces and switch lead to considerable
improvement. With flow control, I could approach the full duplex
bandwidth (200 MB/s) for large buffer sizes. I could achieve additional
improvement by using optimized algorithms (thanks to George and others
on this point), especially for smaller buffer sizes in the same range
as yours. I did not studied the MPI_Reduce case, but I suspect it would
be similar.<br>
<br>
If this is relevant to you, you may find this discussion hanging
somewhere, most probably on the LAM/MPI list, starting august or
september 2005. I did not experimented Open MPI at that time due to
portability problems on Solaris 10 opteron platforms. Now these
problems have been solved, and Open MPI is generally faster on our
applications that LAM/MPI and MPICH. <br>
<br>
Pierre.&nbsp; <br>
<br>
<br>
<br>
George Bosilca wrote:
<blockquote cite="mid3D27CA4A-4DF5-4DAA-A582-E33B85F0073A@cs.utk.edu"
 type="cite">
  <pre wrap="">On Oct 28, 2006, at 6:51 PM, Tony Ladd wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">George

Thanks for the references. However, I was not able to figure out if  
it what
I am asking is so trivial it is simply passed over or so subtle  
that its
been overlooked (I suspect the former).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
No. The answer to your question was in the articles. We have more  
than just the Rabenseifner reduce and all-reduce algorithms. Some of  
the most common collective communication calls have up to 15  
different implementations in Open MPI. Of course, each of these  
implementations give the best performance under some particular  
conditions. Unfortunately, there is no unique algorithms that give  
the best performance in all cases. As we have to deal with multiple  
algorithms for each collective, we have to figure out which one is  
better and where. This usually depend on the number of nodes in the  
communicator, the message size as well as the network properties. In  
few words, it's difficult to choose the best one without having prior  
knowledge about the networks you're trying to use. This is something  
we're working on right now on Open MPI. Until then ... It might  
happens that for some particular points the performance of he  
collective communications will not show the best possible  
performance. However, to have a slow-down of a factor of 10 is quite  
unbelievable. There might be something else going on there...

   Thanks,
     george.

PS: BTW which version of Open MPI are you using ? The one who deliver  
the best performance or the collective communications (at least on  
high performance networks) is the nightly release of he 1.2 branch.

  </pre>
  <blockquote type="cite">
    <pre wrap="">The binary tree algorithm in
MPI_Allreduce takes a tiume proportional to 2*N*log_2M where N is  
the vector
length and M is the number of processes. There is a divide and conquer
strategy
(<a class="moz-txt-link-freetext" href="http://www.hlrs.de/organization/par/services/models/mpi/">http://www.hlrs.de/organization/par/services/models/mpi/</a> 
myreduce.html) that
mpich uses to do a MPI_Reduce in a time proportional to N. Is this  
algorithm
or something equivalent in OpenMPI at present? If so how do I turn  
it on?

I also found that OpenMPI is sometimes very slow on MPI_Allreduce  
using TCP.
Things are OK up to 16 processes but at 24 the rates (Message  
length divided
by time) are as follows:

Message size (Kbytes)  		   Throughput (Mbytes/sec)
					M=24		M=32		M=48
	1				1.38		1.30		1.09

	2				2.28		1.94		1.50
	4				2.92		2.35		1.73
	8				3.56		2.81		1.99
	16				3.97		1.94		0.12
	32				0.34		0.24		0.13
	64				3.07		2.33		1.57
	128				3.70		2.80		1.89
	256				4.10		3.10		2.08
	512				4.19		3.28		2.08
	1024				4.36		3.36		2.17

Around 16-32KBytes there is a pronouced slowdown-roughly a factor  
of 10,
which seems too much. Any idea whats going on?

Tony

-------------------------------
Tony Ladd
Chemical Engineering
University of Florida
PO Box 116005
Gainesville, FL 32611-6005

Tel: 352-392-6509
FAX: 352-392-9513
Email: <a class="moz-txt-link-abbreviated" href="mailto:tladd@che.ufl.edu">tladd@che.ufl.edu</a>
Web: <a class="moz-txt-link-freetext" href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a>


_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  </pre>
</blockquote>
<br>
<br>
<pre class="moz-signature" cols="72">-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a class="moz-txt-link-freetext" href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>

       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a class="moz-txt-link-freetext" href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: <a class="moz-txt-link-abbreviated" href="mailto:Pierre.Valiron@obs.ujf-grenoble.fr">Pierre.Valiron@obs.ujf-grenoble.fr</a>
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        

</pre>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2101.php">George Bosilca: "Re: [OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
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
