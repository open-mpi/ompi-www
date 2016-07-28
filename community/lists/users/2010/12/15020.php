<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 00:02:08 2010" -->
<!-- isoreceived="20101207050208" -->
<!-- sent="Tue, 7 Dec 2010 13:02:01 +0800" -->
<!-- isosent="20101207050201" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="AANLkTikfXwaZKWUV_F3QexBS2oMYty-Wf6HGATRYkdXS_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CFDB049.1060600_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 00:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15018.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15032.php">Bowen Zhou: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus Correa
<br>
<p>First of all, thanks for your suggestions.
<br>
<p>1) The malloc function do return a non_NULL pointer.
<br>
<p>2) I didn't tried the MPI_Isend function, actually, The really function I
<br>
need to use is MPI_Allgatherv(). When I used it, I found this function
<br>
didn't work when the the data &gt;= 2GB, then I debugged it and found this
<br>
function finally call the MPI_Send.
<br>
<p>3) I have a large number of data need to train. so transfer the message &gt;=
<br>
2GB is neccerary. Although I can divided the data into smaller, but I think
<br>
the effciency will become lower too.
<br>
<p><p>Regards
<br>
Xianjun Meng
<br>
<p>2010/12/7 Gus Correa &lt;gus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Xianjun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions/Questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Did you check if malloc returns a non-NULL pointer?
</span><br>
<span class="quotelev1">&gt; Your program is assuming this, but it may not be true,
</span><br>
<span class="quotelev1">&gt; and in this case the problem is not with MPI.
</span><br>
<span class="quotelev1">&gt; You can print a message and call MPI_Abort if it doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Have you tried MPI_Isend/MPI_Irecv?
</span><br>
<span class="quotelev1">&gt; Or perhaps the buffered cousin MPI_Ibsend?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Why do you want to send these huge messages?
</span><br>
<span class="quotelev1">&gt; Wouldn't it be less of a trouble to send several
</span><br>
<span class="quotelev1">&gt; smaller messages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xianjun wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you running on two processes (mpiexec -n 2)?
</span><br>
<span class="quotelev2">&gt;&gt; Yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to print Gsize?
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I had checked my codes several times, and I thought the errors came
</span><br>
<span class="quotelev2">&gt;&gt; from the OpenMpi. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command line I used:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun -hostfile ./Serverlist -np 2 ./test&quot;. The &quot;Serverlist&quot; file
</span><br>
<span class="quotelev2">&gt;&gt; include several computers in my network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command line that I used to build the openmpi-1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-debug --prefix=/usr/work/openmpi ; make all install;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What interconnect do you use?
</span><br>
<span class="quotelev2">&gt;&gt; It is normal TCP/IP interconnect with 1GB network card. when I debugged my
</span><br>
<span class="quotelev2">&gt;&gt; codes(and the openmpi codes), I found the openMpi do call the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_pml_ob1_send_request_start_rdma(...)&quot; function, but I was not quite
</span><br>
<span class="quotelev2">&gt;&gt; sure which protocal was used when transfer 2BG data. Do you have any
</span><br>
<span class="quotelev2">&gt;&gt; opinions? Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt; Xianjun Meng
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/12/7 Gus Correa &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Xianjun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Are you running on two processes (mpiexec -n 2)?
</span><br>
<span class="quotelev2">&gt;&gt;    I think this code will deadlock for more than two processes.
</span><br>
<span class="quotelev2">&gt;&gt;    The MPI_Recv won't have a matching send for rank&gt;1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Also, this is C, not MPI,
</span><br>
<span class="quotelev2">&gt;&gt;    but you may be wrapping into the negative numbers.
</span><br>
<span class="quotelev2">&gt;&gt;    Have you tried to print Gsize?
</span><br>
<span class="quotelev2">&gt;&gt;    It is probably -2147483648 in 32bit and 64bit machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    My two cents.
</span><br>
<span class="quotelev2">&gt;&gt;    Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Hi,
</span><br>
<span class="quotelev2">&gt;&gt;        What interconnect and command line do you use? For InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt;        openib component there is a known issue with large transfers (2GB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="https://svn.open-mpi.org/trac/ompi/ticket/2623">https://svn.open-mpi.org/trac/ompi/ticket/2623</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        try disabling memory pinning:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        regards
</span><br>
<span class="quotelev2">&gt;&gt;        M
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        2010/12/6 &lt;xjun.meng_at_[hidden] &lt;mailto:xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:xjun.meng_at_[hidden] &lt;mailto:xjun.meng_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           In my computers(X86-64), the sizeof(int)=4, but the
</span><br>
<span class="quotelev2">&gt;&gt;           sizeof(long)=sizeof(double)=sizeof(size_t)=8. when I checked my
</span><br>
<span class="quotelev2">&gt;&gt;           mpi.h file, I found that the definition about the sizeof(int) is
</span><br>
<span class="quotelev2">&gt;&gt;           correct. meanwhile, I think the mpi.h file was generated
</span><br>
<span class="quotelev2">&gt;&gt;        according
</span><br>
<span class="quotelev2">&gt;&gt;           to my compute environment when I compiled the Openmpi. So, my
</span><br>
<span class="quotelev2">&gt;&gt;        codes
</span><br>
<span class="quotelev2">&gt;&gt;           still don't work. :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Further, I found when I called the collective routines(such as,
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_Allgatherv(...)) which are implemented by the Point 2 Point
</span><br>
<span class="quotelev2">&gt;&gt;           don't work either when the data &gt; 2GB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Thanks
</span><br>
<span class="quotelev2">&gt;&gt;           Xianjun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           2010/12/6 Tim Prince &lt;n8tm_at_[hidden] &lt;mailto:n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:n8tm_at_[hidden] &lt;mailto:n8tm_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               On 12/5/2010 7:13 PM, Xianjun wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   I met a question recently when I tested the MPI_send and
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt;                   functions. When I run the following codes, the processes
</span><br>
<span class="quotelev2">&gt;&gt;                   hanged and I
</span><br>
<span class="quotelev2">&gt;&gt;                   found there was not data transmission in my network
</span><br>
<span class="quotelev2">&gt;&gt;        at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   BTW: I finished this test on two X86-64 computers
</span><br>
<span class="quotelev2">&gt;&gt;        with 16GB
</span><br>
<span class="quotelev2">&gt;&gt;                   memory and
</span><br>
<span class="quotelev2">&gt;&gt;                   installed Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   5
</span><br>
<span class="quotelev2">&gt;&gt;                   6
</span><br>
<span class="quotelev2">&gt;&gt;                   7 int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt;                   8 {
</span><br>
<span class="quotelev2">&gt;&gt;                   9 int localID;
</span><br>
<span class="quotelev2">&gt;&gt;                   10 int numOfPros;
</span><br>
<span class="quotelev2">&gt;&gt;                   11 size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev2">&gt;&gt;                   12
</span><br>
<span class="quotelev2">&gt;&gt;                   13 char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev2">&gt;&gt;                   14
</span><br>
<span class="quotelev2">&gt;&gt;                   15 MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;                   16 MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev2">&gt;&gt;                   17 MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev2">&gt;&gt;                   18
</span><br>
<span class="quotelev2">&gt;&gt;                   19 MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev2">&gt;&gt;                   20 MPI_Type_contiguous(2048, MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt;                   21 MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt;                   22
</span><br>
<span class="quotelev2">&gt;&gt;                   23 if (localID == 0)
</span><br>
<span class="quotelev2">&gt;&gt;                   24 {
</span><br>
<span class="quotelev2">&gt;&gt;                   25 MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1,
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;                   26 }
</span><br>
<span class="quotelev2">&gt;&gt;                   27
</span><br>
<span class="quotelev2">&gt;&gt;                   28 if (localID != 0)
</span><br>
<span class="quotelev2">&gt;&gt;                   29 {
</span><br>
<span class="quotelev2">&gt;&gt;                   30 MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;                   31 MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev2">&gt;&gt;                   32 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;                   33 }
</span><br>
<span class="quotelev2">&gt;&gt;                   34
</span><br>
<span class="quotelev2">&gt;&gt;                   35 MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;                   36
</span><br>
<span class="quotelev2">&gt;&gt;                   37 return 0;
</span><br>
<span class="quotelev2">&gt;&gt;                   38 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               You supplied all your constants as 32-bit signed data,
</span><br>
<span class="quotelev2">&gt;&gt;        so, even
</span><br>
<span class="quotelev2">&gt;&gt;               if the count for MPI_Send() and MPI_Recv() were a larger
</span><br>
<span class="quotelev2">&gt;&gt; data
</span><br>
<span class="quotelev2">&gt;&gt;               type, you would see this limit. Did you look at your
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mpi.h&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               --         Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;               users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;               users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;           users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;           users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15020/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15019.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15018.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15032.php">Bowen Zhou: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
