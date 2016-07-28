<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 11:09:53 2007" -->
<!-- isoreceived="20070313150953" -->
<!-- sent="Tue, 13 Mar 2007 17:09:39 +0200" -->
<!-- isosent="20070313150939" -->
<!-- name="David Minor" -->
<!-- email="david-m_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted freezes on launch of application" -->
<!-- id="FCB44A2146B78C479695CF9CCA7EEA8701BA5851_at_excg-isl01" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Orted freezes on launch of application" -->
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
<strong>From:</strong> David Minor (<em>david-m_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 11:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2795.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2786.php">David Minor: "[OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Reply:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
with tar
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph H Castain
<br>
Sent: Tuesday, March 13, 2007 3:25 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Orted freezes on launch of application
<br>
<p>&nbsp;
<br>
<p>Hi David
<br>
<p>I think your tar file didn't get attached - at least, it didn't reach me. Can you please send it again?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 3/13/07 1:00 AM, &quot;David Minor&quot; &lt;david-m_at_[hidden]&gt; wrote:
<br>
<p>Hi,
<br>
I'm an MPICH2 user trying out openmpi. I'm running a 1G network under Red Hat 9, but using the g++ 3.4.3 compiler. Openmpi compiled and installed fine but none of my applications that run under MPICH2 will run.  I decided to go backwards and try to run a non-mpi application like /bin/ps, same results. 
<br>
mpirun -np 2 --host zebra1,bug --mca pls_rsh_debug 1 --mca pls_rsh_agent rsh /bin/ps
<br>
&nbsp;
<br>
The end result is the console is frozen. orted is running on both nodes, one version of orted is zombied under mpirun. I get the same results trying to run a simple mpi application. The enclosed tar has all the info you ask for and then some. I know I'm probably just not doing something right but you're documentation leaves a lot to be desired. The best doc seems to the be FAQ. There doesn't seem to be anything more comprehensive, if there is please tell me. Also, you need to define an == operator for MPI::Request that will allow a request to be compared to MPI_NULL_REQUEST. I don't see any way to do this in you c++ implementation.  
<br>
Regards,
<br>
David Minor
<br>
Orbotech
<br>
<p>________________________________
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2794/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2795.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2786.php">David Minor: "[OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Reply:</strong> <a href="2801.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
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
