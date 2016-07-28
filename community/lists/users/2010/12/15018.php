<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 22:56:02 2010" -->
<!-- isoreceived="20101207035602" -->
<!-- sent="Mon, 06 Dec 2010 22:55:53 -0500" -->
<!-- isosent="20101207035553" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="4CFDB049.1060600_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=CPxUwj4F6pqy7TpOaWgE9deC8utX8USvM0_f-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 22:55:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15016.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15020.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15020.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Xianjun
<br>
<p>Suggestions/Questions:
<br>
<p>1) Did you check if malloc returns a non-NULL pointer?
<br>
Your program is assuming this, but it may not be true,
<br>
and in this case the problem is not with MPI.
<br>
You can print a message and call MPI_Abort if it doesn't.
<br>
<p>2) Have you tried MPI_Isend/MPI_Irecv?
<br>
Or perhaps the buffered cousin MPI_Ibsend?
<br>
<p>3) Why do you want to send these huge messages?
<br>
Wouldn't it be less of a trouble to send several
<br>
smaller messages?
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>Xianjun wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you running on two processes (mpiexec -n 2)?
</span><br>
<span class="quotelev1">&gt; Yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried to print Gsize?
</span><br>
<span class="quotelev1">&gt; Yes, I had checked my codes several times, and I thought the errors came 
</span><br>
<span class="quotelev1">&gt; from the OpenMpi. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line I used:
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -hostfile ./Serverlist -np 2 ./test&quot;. The &quot;Serverlist&quot; file 
</span><br>
<span class="quotelev1">&gt; include several computers in my network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line that I used to build the openmpi-1.4.1:
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug --prefix=/usr/work/openmpi ; make all install;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What interconnect do you use?
</span><br>
<span class="quotelev1">&gt; It is normal TCP/IP interconnect with 1GB network card. when I debugged 
</span><br>
<span class="quotelev1">&gt; my codes(and the openmpi codes), I found the openMpi do call the 
</span><br>
<span class="quotelev1">&gt; &quot;mca_pml_ob1_send_request_start_rdma(...)&quot; function, but I was not quite 
</span><br>
<span class="quotelev1">&gt; sure which protocal was used when transfer 2BG data. Do you have any 
</span><br>
<span class="quotelev1">&gt; opinions? Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Xianjun Meng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/12/7 Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Xianjun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Are you running on two processes (mpiexec -n 2)?
</span><br>
<span class="quotelev1">&gt;     I think this code will deadlock for more than two processes.
</span><br>
<span class="quotelev1">&gt;     The MPI_Recv won't have a matching send for rank&gt;1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Also, this is C, not MPI,
</span><br>
<span class="quotelev1">&gt;     but you may be wrapping into the negative numbers.
</span><br>
<span class="quotelev1">&gt;     Have you tried to print Gsize?
</span><br>
<span class="quotelev1">&gt;     It is probably -2147483648 in 32bit and 64bit machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     My two cents.
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;         What interconnect and command line do you use? For InfiniBand
</span><br>
<span class="quotelev1">&gt;         openib component there is a known issue with large transfers (2GB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         <a href="https://svn.open-mpi.org/trac/ompi/ticket/2623">https://svn.open-mpi.org/trac/ompi/ticket/2623</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         try disabling memory pinning:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         regards
</span><br>
<span class="quotelev1">&gt;         M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         2010/12/6 &lt;xjun.meng_at_[hidden] &lt;mailto:xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:xjun.meng_at_[hidden] &lt;mailto:xjun.meng_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            In my computers(X86-64), the sizeof(int)=4, but the
</span><br>
<span class="quotelev1">&gt;            sizeof(long)=sizeof(double)=sizeof(size_t)=8. when I checked my
</span><br>
<span class="quotelev1">&gt;            mpi.h file, I found that the definition about the sizeof(int) is
</span><br>
<span class="quotelev1">&gt;            correct. meanwhile, I think the mpi.h file was generated
</span><br>
<span class="quotelev1">&gt;         according
</span><br>
<span class="quotelev1">&gt;            to my compute environment when I compiled the Openmpi. So, my
</span><br>
<span class="quotelev1">&gt;         codes
</span><br>
<span class="quotelev1">&gt;            still don't work. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Further, I found when I called the collective routines(such as,
</span><br>
<span class="quotelev1">&gt;            MPI_Allgatherv(...)) which are implemented by the Point 2 Point
</span><br>
<span class="quotelev1">&gt;            don't work either when the data &gt; 2GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Thanks
</span><br>
<span class="quotelev1">&gt;            Xianjun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            2010/12/6 Tim Prince &lt;n8tm_at_[hidden] &lt;mailto:n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:n8tm_at_[hidden] &lt;mailto:n8tm_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                On 12/5/2010 7:13 PM, Xianjun wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    I met a question recently when I tested the MPI_send and
</span><br>
<span class="quotelev1">&gt;                    MPI_Recv
</span><br>
<span class="quotelev1">&gt;                    functions. When I run the following codes, the processes
</span><br>
<span class="quotelev1">&gt;                    hanged and I
</span><br>
<span class="quotelev1">&gt;                    found there was not data transmission in my network
</span><br>
<span class="quotelev1">&gt;         at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    BTW: I finished this test on two X86-64 computers
</span><br>
<span class="quotelev1">&gt;         with 16GB
</span><br>
<span class="quotelev1">&gt;                    memory and
</span><br>
<span class="quotelev1">&gt;                    installed Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;                    2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;                    3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;                    4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;                    5
</span><br>
<span class="quotelev1">&gt;                    6
</span><br>
<span class="quotelev1">&gt;                    7 int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt;                    8 {
</span><br>
<span class="quotelev1">&gt;                    9 int localID;
</span><br>
<span class="quotelev1">&gt;                    10 int numOfPros;
</span><br>
<span class="quotelev1">&gt;                    11 size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev1">&gt;                    12
</span><br>
<span class="quotelev1">&gt;                    13 char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev1">&gt;                    14
</span><br>
<span class="quotelev1">&gt;                    15 MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;                    16 MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev1">&gt;                    17 MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev1">&gt;                    18
</span><br>
<span class="quotelev1">&gt;                    19 MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev1">&gt;                    20 MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;                    21 MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;                    22
</span><br>
<span class="quotelev1">&gt;                    23 if (localID == 0)
</span><br>
<span class="quotelev1">&gt;                    24 {
</span><br>
<span class="quotelev1">&gt;                    25 MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1,
</span><br>
<span class="quotelev1">&gt;                    MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                    26 }
</span><br>
<span class="quotelev1">&gt;                    27
</span><br>
<span class="quotelev1">&gt;                    28 if (localID != 0)
</span><br>
<span class="quotelev1">&gt;                    29 {
</span><br>
<span class="quotelev1">&gt;                    30 MPI_Status status;
</span><br>
<span class="quotelev1">&gt;                    31 MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev1">&gt;                    32 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                    33 }
</span><br>
<span class="quotelev1">&gt;                    34
</span><br>
<span class="quotelev1">&gt;                    35 MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;                    36
</span><br>
<span class="quotelev1">&gt;                    37 return 0;
</span><br>
<span class="quotelev1">&gt;                    38 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                You supplied all your constants as 32-bit signed data,
</span><br>
<span class="quotelev1">&gt;         so, even
</span><br>
<span class="quotelev1">&gt;                if the count for MPI_Send() and MPI_Recv() were a larger data
</span><br>
<span class="quotelev1">&gt;                type, you would see this limit. Did you look at your
</span><br>
<span class="quotelev1">&gt;         &lt;mpi.h&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --         Tim Prince
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                users mailing list
</span><br>
<span class="quotelev1">&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15017.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15016.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15020.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15020.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
