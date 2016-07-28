<?
$subject_val = "[OMPI users] Problem with 'orted: command not found'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 17:36:12 2016" -->
<!-- isoreceived="20160502213612" -->
<!-- sent="Mon, 2 May 2016 22:36:11 +0100" -->
<!-- isosent="20160502213611" -->
<!-- name="Maciek Lewi&#197;&#132;ski" -->
<!-- email="macieklewinski_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with 'orted: command not found'" -->
<!-- id="CAKgXT3D1ZYb5agArm=2EB=078W9nsyJHc4ECNwg8JpRtsqAryQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem with 'orted: command not found'<br>
<strong>From:</strong> Maciek Lewi&#197;&#132;ski (<em>macieklewinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 17:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Reply:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm having problem with Open MPI version 1.10.2.
<br>
I've installed two virtual machines on VirtualBox, both are the same images
<br>
of Ubuntu 12.04 64bit.
<br>
Both have the same accounts, both have everything configured almost exactly
<br>
the same.
<br>
I have configured OMPI only with the --prefix to specify my location of
<br>
install folder which is /home/$USER/.openmpi.
<br>
Users on both machines are identical.
<br>
<p>On both machines running mpirun on one of the example programs work
<br>
perfectly, on both machines I've added bin and lib to corresponding PATHs,
<br>
env command ran on master and through ssh on slave1 gives these results:
<br>
osboxes_at_osboxes:~/cloud$ env | grep PATH
<br>
LD_LIBRARY_PATH=:/usr/local/lib:/usr/local/lib:/home/osboxes/.openmpi/lib
<br>
PATH=/usr/lib/lightdm/lightdm:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin:/usr/local/bin:/home/osboxes/.openmpi/bin
<br>
<p>On both hosts I have installed ssh which works, I've enabled passwordless
<br>
connection, which again, works,
<br>
<p>I have created an NFS folder in which I hold the hello_c program from
<br>
examples and hosts file that looks like this:
<br>
192.168.0.191    master
<br>
192.168.0.190    slave1
<br>
<p>The same two lines are placed in /etc/hosts for ssh to work.
<br>
<p>On both machines, running:
<br>
osboxes_at_osboxes:~/cloud$ mpirun -np 1 ./hello_c
<br>
Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
<br>
osboxes_at_osboxes Distribution, ident: 1.10.2, repo rev:
<br>
v1.10.1-145-g799148f, Jan 21, 2016, 126)
<br>
<p>Works, even running this command on slave1 through ssh from master works as
<br>
expected.
<br>
<p>Yet when I try to execute the following command I get the error:
<br>
osboxes_at_osboxes:~/cloud$ mpirun -np 2 --hostfile hosts ./hello_c
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp
<br>
(--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p>The same happens when I use -host master,slave1 instead of --hostfile
<br>
hosts. I'm slowly running out if ideas, I've tried anything I could find on
<br>
the internet or OMPI FAQ, nothing seems to work. What am I doing wrong?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Previous message:</strong> <a href="29067.php">Nathan Hjelm: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
<li><strong>Reply:</strong> <a href="29069.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with 'orted: command not found'"</a>
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
