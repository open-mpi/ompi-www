<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 10:24:44 2006" -->
<!-- isoreceived="20060425142444" -->
<!-- sent="Tue, 25 Apr 2006 10:24:44 -0400" -->
<!-- isosent="20060425142444" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF709126_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] f90 interface error?: MPI_Comm_get_attr" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 10:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe in reply to:</strong> <a href="1104.php">Michael Kluskens: "[OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're working in an SVN checkout, do this:
<br>
<p>svn merge -r 9675:9676 <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> .
<br>
<p>This will bring in what I did on the trunk to your checkout.  Note that
<br>
it wasn't just the comm attr function that needed to be fixed, but also
<br>
the type and win functions, too.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 25, 2006 10:17 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.1 (today a3r9704)  because 1.0.1 and 
</span><br>
<span class="quotelev1">&gt; 1.0.2 didn't  
</span><br>
<span class="quotelev1">&gt; have enough support for the two MPI-2 commands I need for my project.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because a tight deadline I'm not testing the trunk which is  
</span><br>
<span class="quotelev1">&gt; openmpi-1.2a1r9704 at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead I'm making the fix to 1.1 I described below and then 
</span><br>
<span class="quotelev1">&gt; re-making.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2006, at 9:58 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I apologize for the delay (and I actually do greatly appreciate your
</span><br>
<span class="quotelev2">&gt; &gt; reminders!).  I made a change on the trunk back when I replied; I'm
</span><br>
<span class="quotelev2">&gt; &gt; waiting for my resident F90 expert to give me the &quot;correct&quot; fix (the
</span><br>
<span class="quotelev2">&gt; &gt; bindings are actually generated out of CHASM and XSL files) 
</span><br>
<span class="quotelev1">&gt; so that it
</span><br>
<span class="quotelev2">&gt; &gt; can be properly applied to the v1.1 branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the trunk working properly for you?  (i.e., I did a hackaround  
</span><br>
<span class="quotelev2">&gt; &gt; on the
</span><br>
<span class="quotelev2">&gt; &gt; trunk to get the interface right, but I need to XSL fixes 
</span><br>
<span class="quotelev1">&gt; before I can
</span><br>
<span class="quotelev2">&gt; &gt; commit it to the branch)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, April 25, 2006 9:45 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This problem still exists in OpenMPI 1.1a3r9704 (Apr 24, 2006), I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reported it for 9663 (Apr 20, 2006).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 21, 2006, at 12:32 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You're correct on all counts.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I've corrected the .h.sh script in the trunk and will get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the correct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; XSL (!) fixes in shortly (even the .h.sh script is 
</span><br>
<span class="quotelev1">&gt; generated from a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; marked up version of mpi.h -- don't ask ;-) ).  I also corrected
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; type_get_attr and win_get_attr.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sent: Thursday, April 20, 2006 3:22 PM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The file 'ompi/mpi/f90/mpi-f90-interfaces.h' is automatically
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; generated by ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh?  I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; couldn't get my temp fix to stick so I modified the latter.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Should be?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; subroutine ${procedure}(comm, comm_keyval, attribute_val,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flag, ierr)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    integer, intent(in) :: comm_keyval
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    integer(kind=MPI_ADDRESS_KIND), intent(out) :: attribute_val
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    logical, intent(out) :: flag
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; end subroutine ${procedure}
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; EOF
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; start MPI_Comm_get_attr small
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; output MPI_Comm_get_attr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; end MPI_Comm_get_attr
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I notice that f77 is correct in: ompi/mpi/f77/prototypes_mpi.h
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PN(void, mpi_comm_get_attr, MPI_COMM_GET_ATTR, (MPI_Fint *comm,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MPI_Fint *comm_keyval, MPI_Aint *attribute_val, 
</span><br>
<span class="quotelev1">&gt; MPI_Flogical *flag,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MPI_Fint *ierr));
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Apr 20, 2006, at 2:24 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Error in:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; openmpi-1.1a3r9663/ompi/mpi/f90/mpi-f90-interfaces.h
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; subroutine MPI_Comm_get_attr(comm, comm_keyval,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; attribute_val, flag,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ierr)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    include 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer, intent(in) :: comm_keyval
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer(kind=MPI_ADDRESS_KIND), intent(out) :: attribute_val
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer, intent(out) :: flag
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; end subroutine MPI_Comm_get_attr
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; flag should be a logical.  Only in C is it an integer.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Compare with page 294 of MPI--The Complete Reference, 
</span><br>
<span class="quotelev1">&gt; Volume 1 and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; page 176 of Using MPI, 2nd ed.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In my test case I'm using:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &amp;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                universe_size, flag, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer :: ierr
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    integer  (kind=MPI_ADDRESS_KIND) :: universe_size
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;    logical :: flag
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This compiled and worked as of version 9427.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe in reply to:</strong> <a href="1104.php">Michael Kluskens: "[OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
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
