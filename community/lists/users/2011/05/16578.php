<?
$subject_val = "Re: [OMPI users] Error: Entry Point Not Found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 12:14:00 2011" -->
<!-- isoreceived="20110519161400" -->
<!-- sent="Thu, 19 May 2011 09:13:53 -0700 (PDT)" -->
<!-- isosent="20110519161353" -->
<!-- name="Zhangping Wei" -->
<!-- email="zhangping_wei_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: Entry Point Not Found" -->
<!-- id="101342.7961.qm_at_web111818.mail.gq1.yahoo.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="mailman.19.1305820802.28667.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: Entry Point Not Found<br>
<strong>From:</strong> Zhangping Wei (<em>zhangping_wei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 12:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Previous message:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Paul,

I checked the way 'mpirun -np N &lt;cmd&gt;' you mentioned, but it was the same 
problem.

I guess it may related to the system I used, because I have used it correctly in 
another XP 32 bit system.

I look forward to more advice.Thanks.

Zhangping 




________________________________
&#183;&#162;&#188;&#254;&#200;&#203;&#163;&#186; &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
&#202;&#213;&#188;&#254;&#200;&#203;&#163;&#186; users_at_[hidden]
&#183;&#162;&#203;&#205;&#200;&#213;&#198;&#218;&#163;&#186; 2011/5/19 (&#214;&#220;&#203;&#196;) 11:00:02 &#201;&#207;&#206;&#231;
&#214;&#247;   &#204;&#226;&#163;&#186; users Digest, Vol 1910, Issue 2

Send users mailing list submissions to
    users_at_[hidden]

To subscribe or unsubscribe via the World Wide Web, visit
    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
or, via email, send a message with subject or body 'help' to
    users-request_at_[hidden]

You can reach the person managing the list at
    users-owner_at_[hidden]

When replying, please edit your Subject line so it is more specific
than &quot;Re: Contents of users digest...&quot;


Today's Topics:

   1. Re: Error: Entry Point Not Found (Paul van der Walt)
   2. Re: Openib with &gt; 32 cores per node (Robert Horton)
   3. Re: Openib with &gt; 32 cores per node (Samuel K. Gutierrez)


----------------------------------------------------------------------

Message: 1
Date: Thu, 19 May 2011 16:14:02 +0100
From: Paul van der Walt &lt;paul_at_[hidden]&gt;
Subject: Re: [OMPI users] Error: Entry Point Not Found
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;BANLkTinjZ0CNtchQJCZYhfGSnR51jPuP7w_at_[hidden]&gt;
Content-Type: text/plain; charset=UTF-8

Hi,

On 19 May 2011 15:54, Zhangping Wei &lt;zhangping_wei_at_[hidden]&gt; wrote:
&gt; 4, I use command window to run it in this way: ?mpirun ?n 4 ?**.exe ?,then I

Probably not the problem, but shouldn't that be 'mpirun -np N &lt;cmd&gt;' ?

Paul

-- 
O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org



------------------------------

Message: 2
Date: Thu, 19 May 2011 16:37:56 +0100
From: Robert Horton &lt;r.horton_at_[hidden]&gt;
Subject: Re: [OMPI users] Openib with &gt; 32 cores per node
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;1305819476.9663.148.camel_at_moelwyn&gt;
Content-Type: text/plain; charset=&quot;UTF-8&quot;

On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
&gt; Hi,
&gt; 
&gt; Try the following QP parameters that only use shared receive queues.
&gt; 
&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
&gt; 

Thanks for that. If I run the job over 2 x 48 cores it now works and the
performance seems reasonable (I need to do some more tuning) but when I
go up to 4 x 48 cores I'm getting the same problem:

[compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
 error creating qp errno says Cannot allocate memory
[compute-1-7.local:18106] *** An error occurred in MPI_Isend
[compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
[compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
[compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)

Any thoughts?

Thanks,
Rob
-- 
Robert Horton
System Administrator (Research Support) - School of Mathematical Sciences
Queen Mary, University of London
r.horton_at_[hidden]  -  +44 (0) 20 7882 7345



------------------------------

Message: 3
Date: Thu, 19 May 2011 09:59:13 -0600
From: &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt;
Subject: Re: [OMPI users] Openib with &gt; 32 cores per node
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;B3E83138-9AF0-48C0-871C-DBBB2E712E12_at_[hidden]&gt;
Content-Type: text/plain; charset=us-ascii

Hi,

On May 19, 2011, at 9:37 AM, Robert Horton wrote

&gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
&gt;&gt; Hi,
&gt;&gt; 
&gt;&gt; Try the following QP parameters that only use shared receive queues.
&gt;&gt; 
&gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
&gt;&gt; 
&gt; 
&gt; Thanks for that. If I run the job over 2 x 48 cores it now works and the
&gt; performance seems reasonable (I need to do some more tuning) but when I
&gt; go up to 4 x 48 cores I'm getting the same problem:
&gt; 
&gt;[compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
&gt;] error creating qp errno says Cannot allocate memory
&gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
&gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
&gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
&gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now 
&gt;abort)
&gt; 
&gt; Any thoughts?

How much memory does each node have?  Does this happen at startup?

Try adding:

-mca btl_openib_cpc_include rdmacm

I'm not sure if your version of OFED supports this feature, but maybe using XRC 
may help.  I **think** other tweaks are needed to get this going, but I'm not 
familiar with the details.

Hope that helps,

Samuel K. Gutierrez
Los Alamos National Laboratory


&gt; 
&gt; Thanks,
&gt; Rob
&gt; -- 
&gt; Robert Horton
&gt; System Administrator (Research Support) - School of Mathematical Sciences
&gt; Queen Mary, University of London
&gt; r.horton_at_[hidden]  -  +44 (0) 20 7882 7345
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>






------------------------------

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

End of users Digest, Vol 1910, Issue 2
**************************************

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Previous message:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16581.php">Jeff Squyres: "Re: [OMPI users] Error: Entry Point Not Found"</a>
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
