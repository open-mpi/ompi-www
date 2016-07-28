<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 13:40:01 2006" -->
<!-- isoreceived="20060906174001" -->
<!-- sent="Wed, 06 Sep 2006 10:40:28 -0700" -->
<!-- isosent="20060906174028" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Probable MPI2 bug?" -->
<!-- id="44FF080C.5070603_at_reachone.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1157554426.22686.24.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 13:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Previous message:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Reply:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>I notice in the OMPI_INFO output the following parameters that seem 
<br>
relevant to this problem:
<br>
<p>MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
<br>
MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
<br>
MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
<br>
MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
<br>
MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
<br>
MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
<br>
MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
<br>
MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;2&quot;)
<br>
MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
<br>
<p>Specifically the 'self_max_send_size=262144', which I assume is the 
<br>
maximum size (bytes?) message a processor can send to itself. None of 
<br>
the messages in my above tests approached this limit. However, I am 
<br>
puzzled by this, because the program below runs correctly for 
<br>
ridiculously large message sizes (as shown 200 Mbytes).
<br>
<p>program test
<br>
!
<br>
implicit none
<br>
!
<br>
include 'mpif.h'
<br>
!
<br>
integer imjm
<br>
parameter (imjm=200000000)
<br>
!
<br>
integer itype , istrt , itau ,istat , msg , nstat
<br>
integer irank,nproc,iwin,i,n,ir
<br>
integer isizereal,iwinsize,itarget_disp
<br>
!
<br>
integer , dimension(:) , allocatable :: len
<br>
integer , dimension(:) , allocatable :: loff
<br>
real , dimension(:) , allocatable :: x
<br>
real , dimension(:) , allocatable :: ximjm
<br>
!
<br>
!
<br>
call mpi_init(istat)
<br>
call mpi_comm_rank(mpi_comm_world,irank,istat)
<br>
call mpi_comm_size(mpi_comm_world,nproc,istat)
<br>
!
<br>
allocate(len(nproc))
<br>
allocate(loff(nproc))
<br>
allocate(x(imjm/nproc))
<br>
!
<br>
ir = irank + 1
<br>
!
<br>
if(ir.eq.1)allocate(ximjm(imjm))
<br>
!
<br>
do 200 n = 1,nproc
<br>
len(n) = imjm/nproc
<br>
loff(n) = (n-1)*imjm/nproc
<br>
200 continue
<br>
!
<br>
call mpi_type_size(mpi_real,isizereal,istat)
<br>
!
<br>
iwinsize = imjm*isizereal
<br>
call mpi_win_create(ximjm,iwinsize,isizereal,mpi_info_null,
<br>
&amp; mpi_comm_world,iwin,istat)
<br>
!
<br>
if(ir.eq.1)then
<br>
do 250 i = 1,imjm
<br>
ximjm(i) = i
<br>
250 continue
<br>
endif
<br>
!
<br>
itarget_disp = loff(ir)
<br>
call mpi_win_fence(0,iwin,istat)
<br>
call mpi_get(x,len(ir),mpi_real,0,itarget_disp,len(ir),mpi_real,
<br>
&amp; iwin,istat)
<br>
call mpi_win_fence(0,iwin,istat)
<br>
!
<br>
print('(A,i3,8f20.2)'),' x ',ir,x(1),x(len(ir))
<br>
stop
<br>
end
<br>
<p>Tom Rosmond
<br>
<p><p><p><p>Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Mon, 2006-09-04 at 11:01 -0700, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Attached is some error output from my tests of 1-sided message
</span><br>
<span class="quotelev2">&gt;&gt;passing, plus my info file.  Below are two copies of a simple fortran
</span><br>
<span class="quotelev2">&gt;&gt;subroutine that mimics mpi_allgatherv using  mpi-get calls.  The top
</span><br>
<span class="quotelev2">&gt;&gt;version fails, the bottom runs OK.  It seems clear from these
</span><br>
<span class="quotelev2">&gt;&gt;examples, plus the 'self_send' phrases in the error output, that there
</span><br>
<span class="quotelev2">&gt;&gt;is a problem internally with a processor sending data to itself.  I
</span><br>
<span class="quotelev2">&gt;&gt;know that your 'mpi_get' implementation is simply a wrapper around
</span><br>
<span class="quotelev2">&gt;&gt;'send/recv' calls, so clearly this shouldn't happen.  However, the
</span><br>
<span class="quotelev2">&gt;&gt;problem does not happen in all cases; I tried to duplicate it in a
</span><br>
<span class="quotelev2">&gt;&gt;simple stand-alone program with mpi_get calls and was unable to make
</span><br>
<span class="quotelev2">&gt;&gt;it fail.  Go figure.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That is an odd failure and at first glance it does look like there is
</span><br>
<span class="quotelev1">&gt;something wrong with our one-sided implementation.  I've filed a bug in
</span><br>
<span class="quotelev1">&gt;our tracker about the issue and you should get updates on the ticket as
</span><br>
<span class="quotelev1">&gt;we work on the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Previous message:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>Reply:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
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
