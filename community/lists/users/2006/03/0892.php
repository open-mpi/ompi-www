<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 21:38:40 2006" -->
<!-- isoreceived="20060321023840" -->
<!-- sent="Mon, 20 Mar 2006 18:38:32 -0800" -->
<!-- isosent="20060321023832" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users]  Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1" -->
<!-- id="0603DE2F-61DA-4FB8-9943-7EA27125B655_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.23.1142874005.24759.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 21:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0891.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Frank,
<br>
<p>I've used OMPI 1.0.1 with Xgrid. I don't think I ran into the same  
<br>
problem as you with the job hanging. But I'll continue just in case  
<br>
it helps or helps someone else. The one thing that I noticed was that  
<br>
Xgrid/OMPI does not allow an MPI application to write out a file  
<br>
other than to standard output.
<br>
<p>In my example when running HP Linpack over an Xgrid enabled OMPI, if  
<br>
I execute the mpirun with HPL just outputting to the screen,  
<br>
everything runs fine. However, if I set my hpl.dat file to write out  
<br>
the results to a file, I get an error:
<br>
<p>With 'hpl.dat' set to write to an output file called 'HPL.out' after  
<br>
executing: mpirun -d -hostfile myhosts -np 4 ./xhpl
<br>
<p>portal.private:00545] [0,1,0] ompi_mpi_init completed
<br>
HPL ERROR from process # 0, on line 318 of function HPL_pdinfo:
<br>
<span class="quotelev3"> &gt;&gt;&gt; cannot open file HPL.out. &lt;&lt;&lt;
</span><br>
<p>I've tested this with a couple of other applications as well. For  
<br>
now, the only way I can solve it is if I set my working directory to  
<br>
allow user nobody to write to my working directory. Hope this helps.
<br>
<p>-Warner
<br>
<p>Warner Yuen
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p>On Mar 20, 2006, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 20 Mar 2006 08:11:32 +0100
</span><br>
<span class="quotelev1">&gt; From: Frank &lt;openmpi-user_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;441E55A4.6090700_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is the full -d option output I've got mpi-running vhone on the
</span><br>
<span class="quotelev1">&gt; xgrid. The truncation is due to the reported &quot;hang&quot;.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0891.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
