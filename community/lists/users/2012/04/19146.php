<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running anmpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 26 08:45:15 2012" -->
<!-- isoreceived="20120426124515" -->
<!-- sent="Thu, 26 Apr 2012 08:45:07 -0400" -->
<!-- isosent="20120426124507" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running anmpi programs" -->
<!-- id="4F994353.30001_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FEDD277BE5C6E9439BE85976C98CDB301864CA28_at_CH1PRD0102MB134.prod.exchangelabs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running anmpi programs<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-26 08:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, he should leave the &quot;:$LD_LIBRARY_PATH&quot; on the end. That way
<br>
if LD_LIBRARY_PATH is already defined, the Open MPI directory is just
<br>
prepended to LD_LIBRARY_PATH. Omitting &quot;:$LD_LIBRARY_PATH&quot; from his
<br>
command could cause other needed elements of LD_LIBRARY_PATH to be lost,
<br>
causing other runtime errors.
<br>
<p><pre>
--
Prentice
 
On 04/25/2012 11:48 AM, tyler.balson_at_[hidden] wrote:
&gt; export LD_LIBRARY_PATH= [location of library] leave out
&gt; the :$LD_LIBRARY_PATH 
&gt; ------------------------------------------------------------------------
&gt; *From:* users-bounces_at_[hidden] [users-bounces_at_[hidden]] on
&gt; behalf of seshendra seshu [seshu199_at_[hidden]]
&gt; *Sent:* Wednesday, April 25, 2012 10:43 AM
&gt; *To:* Open MPI Users
&gt; *Subject:* Re: [OMPI users] regarding the problem occurred while
&gt; running anmpi programs
&gt;
&gt; Hi
&gt; I have exported the library files as below
&gt;
&gt; [master_at_ip-10-80-106-70 ~]$ export
&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.4.5/lib:$LD_LIBRARY_PATH                                                                       
&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/openmpi-1.4.5
&gt; -n 1 --hostfile hostfile out
&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot
&gt; open shared object file: No such file or directory
&gt; [master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/lib/ -n 1
&gt; --hostfile hostfile
&gt; out                                                                               
&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot
&gt; open shared object file: No such file or directory
&gt;
&gt; But still iam getting the same error.
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; On Wed, Apr 25, 2012 at 5:36 PM, Jeff Squyres (jsquyres)
&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;     See the FAQ item I cited. 
&gt;
&gt;     Sent from my phone. No type good. 
&gt;
&gt;     On Apr 25, 2012, at 11:24 AM, &quot;seshendra seshu&quot;
&gt;     &lt;seshu199_at_[hidden] &lt;mailto:seshu199_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;&gt;     Hi
&gt;&gt;     now i have created an used and tried to run the program but i got
&gt;&gt;     the following error
&gt;&gt;
&gt;&gt;     [master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile
&gt;&gt;     out                                                                                                        
&gt;&gt;     out: error while loading shared libraries: libmpi_cxx.so.0:
&gt;&gt;     cannot open shared object file: No such file or directory
&gt;&gt;
&gt;&gt;
&gt;&gt;     thanking you
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;     On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]
&gt;&gt;     &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
&gt;&gt;
&gt;&gt;         On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
&gt;&gt;
&gt;&gt;         &gt; so should i need to create an user and run the mpi program.
&gt;&gt;         or how can i run in cluster
&gt;&gt;
&gt;&gt;         It is a &quot;best practice&quot; to not run real applications as root
&gt;&gt;         (e.g., MPI applications).  Create a non-privlidged user to
&gt;&gt;         run your applications.
&gt;&gt;
&gt;&gt;         Then be sure to set your LD_LIBRARY_PATH if you installed
&gt;&gt;         Open MPI into a non-system-default location.  See this FAQ item:
&gt;&gt;
&gt;&gt;          
&gt;&gt;          <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
&gt;&gt;
&gt;&gt;         --
&gt;&gt;         Jeff Squyres
&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
&gt;&gt;         For corporate legal information go to:
&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;         _______________________________________________
&gt;&gt;         users mailing list
&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;     -- 
&gt;&gt;      WITH REGARDS
&gt;&gt;     M.L.N.Seshendra
&gt;&gt;     _______________________________________________
&gt;&gt;     users mailing list
&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt;
&gt; -- 
&gt;  WITH REGARDS
&gt; M.L.N.Seshendra
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19145.php">TERRY DONTJE: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
